<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_user();
    }


    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);

        $pasien = $this->Crud_model->listing('tbl_pasien');
        $jenis = $this->Crud_model->listing('tbl_jenis');
        $gejala = $this->Crud_model->listing('tbl_gejala');
        $pengetahuan = $this->Crud_model->listing('tbl_pengetahuan');

        $data = [
            'title'     => 'Dashboard',
            'user'      => $user,
            'pasien'      => $pasien,
            'jenis'      => $jenis,
            'gejala'      => $gejala,
            'pengetahuan'      => $pengetahuan,
            'content'   => 'admin/dashboard/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

/* End of file Dashboard.php */
