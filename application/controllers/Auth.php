<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (isset($_SESSION['login'])) {
            header('location: ' . base_url());
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Masukkan username !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Masukkan password !'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = "Form Login";
            $this->load->view('templates_auth/auth_header.php', $data);
            $this->load->view('auth/login');
            $this->load->view('templates_auth/auth_footer.php');
        } else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $user = $this->db->get_where('karyawan', ['username' => $username])->row_array();
            if ($user) {
                if ($password == $user['password']) {
                    $_SESSION['login'] = true;
                    $_SESSION['nama'] = $_POST['username'];
                    redirect('login');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password salah ! </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
           Username belum terdaftar !
          </div>');
                redirect('login');
            }
        }
    }

    //daftar
    public function registrasi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|is_unique[karyawan.username]', [
            'required' => 'Masukkan username !',
            'min_length' => 'Username terlalu pendek !',
            'is_unique' => 'Username Telah digunakan !'
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
            'required' => 'Masukkan Nama Lengkap !'
        ]);
        $this->form_validation->set_rules('nohp', 'Nomor Hp', 'required|exact_length[12]|is_unique[karyawan.nohp]', [
            'required' => 'Masukkan Nomor Hp !',
            'exact_length' => 'Nomor telepon terlalu pendek/panjang !',
            'is_unique' => 'Nomor Hp Telah digunakan !'
        ]);
        $this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required', [
            'required' => 'Masukkan Jenis Kelamin !'
        ]);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', [
            'required' => 'Masukkan Jabatan !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'min_length' => "Password terlalu pendek !",
            'matches' => "Password tidak sama !"
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Form Registrasi";
            $this->load->view('templates_auth/auth_header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('templates_auth/auth_footer');
        } else {
            $this->Karyawan_model->tambahUser();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat datang ! Silahkan Login  
        </div>');
            redirect('login');
        }
    }




    public function logout()
    {
        session_unset();
        session_destroy();

        // setcookie('absen', '', time() - 360);
        header('location: ' . base_url());
    }
}
