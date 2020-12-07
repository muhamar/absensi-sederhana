<?php

use Sabberworm\CSS\Value\Value;

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        //penangkapan nama
        if (isset($_SESSION['nama'])) {

            $nama = $_SESSION['nama'];
        } else {
            $nama = '';
        }
        $data['jumlah_user'] = $this->db->get('karyawan')->num_rows();
        $data['jumlah_absen'] = $this->db->get('absen')->num_rows();
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($nama);
        $data['judul'] = "Dashboard Admin";
        $this->load->view('templates_dashboard/dashboard_header', $data);
        $this->load->view('Dashboard/index', $data);
        $this->load->view('templates_dashboard/dashboard_footer');
    }

    public function daftarAbsen()
    {
        //config
        $config['base_url'] = 'http://localhost/absensi-karyawan/dashboard/daftarabsen';
        $config['num_links'] = 3;

        //style
        $config['full_tag_open'] = '<nav><ul class="pagination ">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a> </li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];


        //pagination
        $this->load->library('pagination');
        //config
        $config['total_rows'] = $this->Absen_model->countAbsen();
        $config['per_page'] = 6;
        //initilaize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        if ($this->input->post('tanggal_awal') || $this->input->post('tanggal_akhir')) {
            $data['absen'] = $this->Absen_model->cariDataAbsen($config['per_page'], $data['start']);
        }
        if ($this->input->post('tanggal_awal') == null) {
            $data['absen'] = $this->Absen_model->getAbsen($config['per_page'], $data['start']);
        }

        //penangkapan nama
        if (isset($_SESSION['nama'])) {

            $nama = $_SESSION['nama'];
        } else {
            $nama = '';
        }
        $data['jumlah_user'] = $this->db->get('karyawan')->num_rows();
        $data['jumlah_absen'] = $this->db->get('absen')->num_rows();
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($nama);
        $data['judul'] = "Dashboard Admin - Daftar Absen";
        $this->load->view('templates_dashboard/dashboard_header', $data);
        $this->load->view('Dashboard/absen', $data);
        $this->load->view('templates_dashboard/dashboard_footer');
    }

    public function cetakAbsen()
    {
        $data['absen'] = $this->Absen_model->cetak_absen();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-data-absen.pdf";
        $this->pdf->load_view('dashboard/cetak', $data);
    }



    public function daftarUser()
    {
        //config
        $config['base_url'] = 'http://localhost/absensi-karyawan/dashboard/daftarUser';
        $config['num_links'] = 3;

        //style
        $config['full_tag_open'] = '<nav><ul class="pagination ">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a> </li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];


        //pagination
        $this->load->library('pagination');
        //config
        $config['total_rows'] = $this->Absen_model->countAbsen();
        $config['per_page'] = 6;
        //initilaize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);


        if ($this->input->post('cari_user')) {
            $data['user'] = $this->Karyawan_model->cariDataUser();
        } else {
            $data['user'] = $this->Karyawan_model->getAllKaryawan($config['per_page'], $data['start']);
        }


        //penangkapan nama
        if (isset($_SESSION['nama'])) {

            $nama = $_SESSION['nama'];
        } else {
            $nama = '';
        }
        $data['jumlah_user'] = $this->db->get('karyawan')->num_rows();
        $data['jumlah_absen'] = $this->db->get('absen')->num_rows();
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($nama);
        $data['judul'] = "Dashboard Admin - Daftar User";
        $this->load->view('templates_dashboard/dashboard_header', $data);
        $this->load->view('Dashboard/user', $data);
        $this->load->view('templates_dashboard/dashboard_footer');
    }

    //HAPUS
    public function hapusAbsen($id)
    {
        $this->Absen_model->hapusDataAbsen($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data <strong>berhasil</strong> dihapus !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('dashabsen');
    }
    public function hapusUser($id)
    {
        $this->Karyawan_model->hapusDataUser($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data <strong>berhasil</strong> dihapus !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('dashuser');
    }

    //EDIT
    public function editAbsen($id)
    {

        //penangkapan nama
        if (isset($_SESSION['nama'])) {

            $nama = $_SESSION['nama'];
        } else {
            $nama = '';
        }

        $data['absens'] = $this->Absen_model->getAllAbsenById($id);
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($nama);
        $data['judul'] = "Dashboard Admin - Edit Absen";

        $this->load->view('templates_dashboard/dashboard_header', $data);
        $this->load->view('dashboard/edit_absen', $data);
        $this->load->view('templates_dashboard/dashboard_footer');


        if ($this->input->post('edit-absen') == "edit") {
            $this->Absen_model->editDataAbsen();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong>berhasil</strong> diubah !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('dashabsen');
        }
    }

    public function editDataUser($id)
    {

        //penangkapan nama
        if (isset($_SESSION['nama'])) {

            $nama = $_SESSION['nama'];
        } else {
            $nama = '';
        }

        $data['karyawans'] = $this->Karyawan_model->getAllUserById($id);
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($nama);
        $data['judul'] = "Dashboard Admin - Edit User";
        $data['jkel'] = ['Pria', 'Wanita'];
        $data['jabatan'] = ['Karyawan', 'Magang', 'Manajer'];


        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => "Username tidak boleh kososng !"
        ]);

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => "Nama Lengkap tidak boleh kosong !"
        ]);
        $this->form_validation->set_rules('nohp', 'Nohp', 'required', [
            'required' => "Nomor Hp tidak boleh kosong !"
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_dashboard/dashboard_header', $data);
            $this->load->view('dashboard/edit_user.php', $data);
            $this->load->view('templates_dashboard/dashboard_footer');
        } else {
            $this->Karyawan_model->editDataUser();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong>berhasil</strong> diubah !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('dashuser');
        }
    }
}
