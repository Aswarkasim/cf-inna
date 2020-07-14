<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

  public function index()
  {
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $data = [
      'konfigurasi' => $konfigurasi,
      'content' => 'home/kontak'
    ];

    $this->load->view('layout/wrapper', $data);
  }
}
