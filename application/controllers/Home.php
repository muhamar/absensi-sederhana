<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model');
        $this->load->model('Absen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        //waktu
        // date_default_timezone_set("Asia/Makassar");
        // $a = date("H");
        // if (($a >= 6) && ($a <= 11)) {
        //     $data['time'] = " Selamat Pagi ";
        // } else if (($a >= 11) && ($a <= 15)) {
        //     $data['time'] = " Selamat  Siang  ";
        // } elseif (($a > 15) && ($a <= 18)) {
        //     $data['time'] = " Selamat Siang ";
        // } else {
        //     $data['time'] = "  Selamat Malam ";
        // }


        //pagination
        $this->load->library('pagination');
        //config
        $config['total_rows'] = $this->Absen_model->countAbsen();
        $config['per_page'] = 6;
        //initilaize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);

        if ($this->input->post('cari_absen')) {
            $data['absen'] = $this->Absen_model->cariDataAbsen();
        } else {
            $data['absen'] = $this->Absen_model->getAbsen($config['per_page'], $data['start']);;
        }




        //penangkapan nama
        if (isset($_SESSION['nama'])) {

            $nama = $_SESSION['nama'];
        } else {
            $nama = '';
        }


        //menampilkan view
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($nama);
        if (isset($_SESSION['login'])) {
            $data['absens'] = $this->Absen_model->getAllAbsen($data['karyawan']);
        }

        $data['judul'] = "Absensi Karyawan";
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');


        // if ($this->input->post('submit_absen') == 'absen') {
        //     $this->Absen_model->absenKaryawan();
        //     setcookie($data['karyawan']['username'], 'pulang', time() + 7200);
        //     header('location: ' . base_url());
        // } else if ($this->input->post('absen_pulang') == 'pulang') {
        //     $this->Absen_model->absenPulang();
        //     setcookie($data['karyawan']['username'], 'absen', time() + 7200);
        //     header('location: ' . base_url());
        // }
        if ($this->input->post('submit_absen') == 'absen') {
            $this->Absen_model->absenKaryawan();
            header('location: ' . base_url());
        } else if ($this->input->post('absen_pulang') == 'pulang') {
            $this->Absen_model->absenPulang();
            header('location: ' . base_url());
        }
    }
}
