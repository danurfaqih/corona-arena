<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Reservasi_model extends CI_Model
{
    public function get_alldata()
    {
        return $this->db->get('tb_lapangan');
    }

    public function simpan($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function fmDelete($id_lapangan)
    {
        $this->db->where('id_lapangan', $id_lapangan);
        $this->db->delete('tb_lapangan');
    }

    public function fmEdit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function fmUpdate($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function get_datamember()
    {
        return $this->db->get('tb_member');
    }

    public function fmDeleteMember($id_member)
    {
        $this->db->where('id_member', $id_member);
        $this->db->delete('tb_member');
    }

    public function get_datareservasi()
    {
        return $this->db->get('tb_reservasi');
    }

    public function get_datareservasi_with_names()
    {
        $this->db->select('tb_reservasi.*, tb_member.nama_member AS member_name, tb_lapangan.nama_lapangan AS lapangan_name');
        $this->db->from('tb_reservasi');
        $this->db->join('tb_member', 'tb_member.id_member = tb_reservasi.member_reservasi'); 
        $this->db->join('tb_lapangan', 'tb_lapangan.id_lapangan = tb_reservasi.lapangan_reservasi'); 
        return $this->db->get()->result();
    }

    public function fmDeleteReservasi($id_reservasi)
    {
        $this->db->where('id_reservasi', $id_reservasi);
        $this->db->delete('tb_reservasi');
    }

    public function get_datareservasi_with_names_by_date($tgl_dari, $tgl_sampai)
    {
        $this->db->select('tb_reservasi.*, tb_member.nama_member AS member_name, tb_lapangan.nama_lapangan AS lapangan_name');
        $this->db->from('tb_reservasi');
        $this->db->join('tb_member', 'tb_member.id_member = tb_reservasi.member_reservasi');
        $this->db->join('tb_lapangan', 'tb_lapangan.id_lapangan = tb_reservasi.lapangan_reservasi');
        $this->db->where('tgl_reservasi >=', $tgl_dari);
        $this->db->where('tgl_reservasi <=', $tgl_sampai);
        return $this->db->get()->result();
    }

    public function lapangan_relasi_reservasi($id_lapangan)
    {
        $this->db->where('lapangan_reservasi', $id_lapangan);
        return $this->db->get('tb_reservasi')->num_rows() > 0;
    }

    public function member_relasi_reservasi($id_member)
    {
     $this->db->where('member_reservasi', $id_member);
        return $this->db->get('tb_reservasi')->num_rows() > 0;
    }
}