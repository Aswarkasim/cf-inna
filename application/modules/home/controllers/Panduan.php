<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panduan extends CI_Controller
{

  public function index()
  {
    $panduan = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $data = [
      'panduan' => $panduan,
      'content' => 'home/panduan'
    ];

    $this->load->view('layout/wrapper', $data);
  }
}
