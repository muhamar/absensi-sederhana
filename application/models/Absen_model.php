<?php
class Absen_model extends CI_Model
{
    public function absenKaryawan()
    {
        $data = [
            "username" => $this->input->post('username'),
            "jkel" => $this->input->post('jkel'),
            "jabatan" => $this->input->post('jabatan'),
            "tanggal" => $this->input->post('tanggal'),
            "jam_datang" => $this->input->post('jam_datang'),
            "status" => 1

        ];
        $this->db->insert('absen', $data);
    }

    public function absenPulang()
    {
        $data = [
            "id" => $this->input->post('id'),
            "username" => $this->input->post('username'),
            "jkel" => $this->input->post('jkel'),
            "jabatan" => $this->input->post('jabatan'),
            "tanggal" => $this->input->post('tanggal'),
            "jam_datang" => $this->input->post('jam_datang'),
            "jam_pulang" => $this->input->post('jam_pulang'),
            "status" => 0
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('absen', $data);
    }

    public function getAllAbsen($nama)
    {
        return $this->db->get_where('absen', ['username' => $nama['username']])->last_row('array');
    }
    public function getAllAbsenById($id)
    {
        return $this->db->get_where('absen', ['id' => $id])->row_array();
    }

    public function cariDataAbsen($limit, $start)
    {

        if ($this->input->post('tanggal_awal') && $this->input->post('tanggal_akhir')) {
            $awal = $this->input->post('tanggal_awal');
            $akhir = $this->input->post('tanggal_akhir');
            return $this->db->query("SELECT * FROM absen WHERE tanggal BETWEEN '$awal' and '$akhir'")->result_array();
        } else if ($this->input->post('tanggal_awal') == true) {
            $tanggal = $this->input->post('tanggal_awal');
            return $this->db->get_where("absen", ['tanggal' => $tanggal], $limit, $start)->result_array();
        } else if ($this->input->post('tanggal_akhir') == true) {
            $tanggal = $this->input->post('tanggal_akhir');
            return $this->db->get_where("absen", ['tanggal' => $tanggal])->result_array();
        } else {
            $keyword = $this->input->post('cari_absen');
            return $this->db->get_where('absen', ['tanggal' => $keyword])->result_array();
        }
    }

    public function cetak_absen()
    {
        return $this->db->get('absen')->result_array();
    }



    public function editDataAbsen()
    {
        $data = [
            'username' => $this->input->post('useranme', true),
            'jkel' => $this->input->post('jkel', true),
            'jabatan' => $this->input->post('jabatan', true),
            'tanggal' => $this->input->post('tanggal', true),
            'jam_datang' => $this->input->post('datang', true),
            'jam_pulang' => $this->input->post('pulang', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('absen', $data);
    }

    public function getAbsen($limit, $start)
    {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('jam_datang', 'DESC');

        return   $this->db->get('absen', $limit, $start)->result_array();
    }

    public function countAbsen()
    {
        return $this->db->get('absen')->num_rows();
    }

    public function hapusDataAbsen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('absen');
    }
}
