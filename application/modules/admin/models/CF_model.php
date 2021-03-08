<?php



defined('BASEPATH') or exit('No direct script access allowed');

class CF_model extends CI_Model
{
    public function listPengetahuan()
    {
        $this->db->select('tbl_pengetahuan.*, tbl_jenis.*, tbl_gejala.*')
            ->from('tbl_pengetahuan')
            ->join('tbl_jenis', 'tbl_jenis.kode_jenis = tbl_pengetahuan.kode_jenis', 'left')
            ->join('tbl_gejala', 'tbl_gejala.kode_gejala = tbl_pengetahuan.kode_gejala', 'left');
        return $this->db->get()->result();
    }

    // public function listPasien()
    // {
    //     $this->db->select('tbl_pasien.*, tbl_jenis.*, tbl_gejala.*')
    //         ->from('tbl_pengetahuan')
    //         ->join('tbl_jenis', 'tbl_jenis.kode_jenis = tbl_pengetahuan.kode_jenis', 'left')
    //         ->join('tbl_gejala', 'tbl_gejala.kode_gejala = tbl_pengetahuan.kode_gejala', 'left');
    //     return $this->db->get()->result();
    // }

    public function listDataPasien()
    {
        $this->db->select('
                            tbl_pasien.*, 
                            tbl_jenis.nama_jenis,
                            tbl_jenis.penanganan,
                            ')
            ->from('tbl_pasien')
            ->join('tbl_jenis', 'tbl_jenis.kode_jenis = tbl_pasien.kode_penyakit', 'left')
            ->order_by('tbl_pasien.tgl_update', 'DESC');
        return $this->db->get()->result();
    }

    public function printTabulasi($start, $end)
    {
        $this->db->select('
                            tbl_pasien.*, 
                            tbl_jenis.nama_jenis,
                            tbl_jenis.penanganan,
                            ')
            ->from('tbl_pasien')
            ->join('tbl_jenis', 'tbl_jenis.kode_jenis = tbl_pasien.kode_penyakit', 'left')
            ->where('tbl_pasien.tgl_update >=', $start)
            ->where('tbl_pasien.tgl_update <=', $end)
            ->order_by('tbl_pasien.tgl_update', 'DESC');
        return $this->db->get()->result();
    }
}
