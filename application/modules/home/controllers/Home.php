<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'data'    => $konfigurasi,
            'content' => 'home/index'
        ];

        $this->load->view('layout/wrapper', $data);
    }
}
