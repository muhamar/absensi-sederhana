<?php

class Karyawan_model extends CI_Model
{

    public function getAllKaryawan($limit, $start)
    {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->order_by('jam', 'DESC');

        return   $this->db->get('karyawan', $limit, $start)->result_array();
    }

    public function getAllUserById($id)
    {
        return $this->db->get_where('karyawan', ['id' => $id])->row_array();
    }

    public function editDataUser()
    {
        $data = [
            'username' => $this->input->post('username', true),
            'nama_lengkap' => $this->input->post('nama', true),
            'password' => $this->input->post('password', true),
            'nohp' => $this->input->post('nohp', true),
            'jkel' => $this->input->post('jkel', true),
            'jabatan' => $this->input->post('jabatan', true),
            'tanggal' => $this->input->post('tanggal', true),
            'jam' => $this->input->post('jam', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('karyawan', $data);
    }


    public function cariDataUser()
    {
        $keyword = $this->input->post('cari_user');
        $this->db->like('username', $keyword);
        $this->db->or_like('nama_lengkap', $keyword);
        $this->db->or_like('nohp', $keyword);
        $this->db->or_like('jabatan', $keyword);
        $this->db->or_like('jkel', $keyword);
        return $this->db->get('karyawan')->result_array();
    }


    public function countKaryawan()
    {
        return $this->db->get('karyawan')->num_rows();
    }


    public function getKaryawan($nama)
    {

        $nama = $nama;
        $query = $this->db->get_where('karyawan', ['username' => $nama]);
        return $query->row_array();
    }


    public function tambahUser()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "nama_lengkap" => $this->input->post('nama_lengkap', true),
            "password" => $this->input->post('password1', true),
            "nohp" => $this->input->post('nohp', true),
            "jkel" => $this->input->post('jkel', true),
            "jabatan" => $this->input->post('jabatan', true),
            "tanggal" => $this->input->post('tanggal', true),
            "jam" => $this->input->post('jam', true)
        ];
        $this->db->insert('karyawan', $data);
    }



    public function hapusDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('karyawan');
    }
}
