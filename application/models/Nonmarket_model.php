<?php


class Nonmarket_model extends CI_Model{

    public function getAllKomplain(){
      return json_decode(
      file_get_contents(API_BASE_URL."itsupport/index_get?param=get_komplain"));
      // return $this->db->get('komplain_nonmarket')->result_array();
    }

    public function getAllPemesanan(){
      return json_decode(file_get_contents(API_BASE_URL."/dashboard/index_get?param=get_pemesanan"));
      // return $this->db->get('pemesanan')->result_array();
    }

    public function tambahDataKomplain(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "telepon" => $this->input->post('no_telp',true),
            "alamat" => $this->input->post('alamat',true),
            "paket" => $this->input->post('paket',true)
        ];
        $this->db->insert('komplain' ,$data);
    }


    public function tambahDataPemesanan(){
        $data2 = [
            "nama" => $this->input->post('nama',true),
            "no_identitas" => $this->input->post('no_identitas',true),
            "email" => $this->input->post('email',true),
            "no_telp" => $this->input->post('no_telp',true),
            "paket" => $this->input->post('paket',true),
            "alamat" => $this->input->post('alamat',true),
        ];
        $this->db->insert('pemesanan' ,$data2);
    }

}
