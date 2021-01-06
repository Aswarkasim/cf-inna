<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function listPengetahuan($kode_penyakit)
    {
        $this->db->select('tbl_pengetahuan.*, tbl_jenis.*, tbl_gejala.nama_gejala, tbl_gejala.nilai_cf as cf_root')
            ->from('tbl_pengetahuan')
            ->join('tbl_jenis', 'tbl_jenis.kode_jenis = tbl_pengetahuan.kode_jenis', 'left')
            ->join('tbl_gejala', 'tbl_gejala.kode_gejala = tbl_pengetahuan.kode_gejala', 'left')
            ->where('tbl_pengetahuan.kode_jenis', $kode_penyakit);
        return $this->db->get()->result();
    }

    public function pasien($id_pasien)
    {
        $this->db->select('tbl_pasien.*, tbl_jenis.*')
            ->from('tbl_pasien')
            ->join('tbl_jenis', 'tbl_jenis.kode_jenis = tbl_pasien.kode_penyakit', 'left')
            ->where('id_pasien', $id_pasien);
        return $this->db->get()->row();
    }

    public function listDiagnosaPasien($id_pasien)
    {
        $this->db->select(
            'tbl_diagnosa.*, 
            tbl_pengetahuan.*, 
            tbl_jenis.*,tbl_gejala.nama_gejala, 
            tbl_gejala.nilai_cf as cf_root'
        )
            ->from('tbl_diagnosa')
            ->join('tbl_pengetahuan', 'tbl_pengetahuan.kode_pengetahuan = tbl_diagnosa.kode_pengetahuan', 'left')
            ->join('tbl_jenis', 'tbl_jenis.kode_jenis = tbl_pengetahuan.kode_jenis', 'left')
            ->join('tbl_gejala', 'tbl_gejala.kode_gejala = tbl_pengetahuan.kode_gejala', 'left')
            ->where('tbl_diagnosa.id_pasien', $id_pasien);
        return $this->db->get()->result_array();
    }

    function listJenisDiagnosa()
    {
        $this->db->select('*')
            ->from('tbl_jenis')
            ->where('parameter', '== 74');
        return $this->db->get()->row();
    }

    function listPenanganan($kode_penyakit, $tingkat)
    {
        $this->db->select('*')
            ->from('tbl_penanganan')
            ->where('kode_jenis', $kode_penyakit)
            ->where('tingkat', $tingkat);
        return $this->db->get()->row();
    }
}
