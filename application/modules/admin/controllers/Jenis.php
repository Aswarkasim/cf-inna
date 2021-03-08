<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_user();
    }

    public function index()
    {
        $jenis = $this->Crud_model->listing('tbl_jenis');
        $data = array(
            'title'     => 'Manjemen Jenis',
            'add'       => 'admin/jenis/add',
            'edit'      => 'admin/jenis/edit/',
            'delete'    => 'admin/jenis/delete/',
            'jenis'    => $jenis,
            'content'       => 'admin/jenis/list',
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'kode',
            'Kode Jenis',
            'required|max_length[3]|is_unique[tbl_jenis.kode_jenis]',
            array(
                'required' => ' %s harus diisi',
                'is_unique' => 'Kode telah ada. Masukkan kode yang lain',
                'max_length' => 'panjang maksimal kode jenis adalah 3 karakter'
            )
        );
        $valid->set_rules(
            'nama',
            'Nama Jenis',
            'required',
            array('required' => ' %s harus diisi')
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'title'     => 'Manjemen Jenis',
                'add'       => 'admin/jenis/add',
                'back'      => 'admin/jenis',
                'content'       => 'admin/jenis/add',
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'kode_jenis'   => $i->post('kode'),
                'nama_jenis'   => $i->post('nama'),
                'deskripsi'   => $i->post('deskripsi')
            );
            $this->Crud_model->add('tbl_jenis', $data);
            $this->session->set_flashdata('msg', ' Data telah ditambah');
            redirect('admin/jenis/add', 'refresh');
        }
    }

    public function edit($kode_jenis)
    {
        $jenis = $this->Crud_model->listingOne('tbl_jenis', 'kode_jenis', $kode_jenis);
        $valid = $this->form_validation;
        $valid->set_rules(
            'kode',
            'Kode Jenis',
            'required|max_length[3]',
            array(
                'required' => ' %s harus diisi',
                'max_length' => 'panjang maksimal kode jenis adalah 3 karakter'
            )
        );
        $valid->set_rules(
            'nama',
            'Nama Jenis',
            'required',
            array('required' => ' %s harus diisi')
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'title'     => 'Manjemen Jenis',
                'edit'       => 'admin/jenis/edit/' . $jenis->kode_jenis,
                'back'      => 'admin/jenis',
                'jenis'    => $jenis,
                'content'       => 'admin/jenis/edit',
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'kode_jenis'   => $kode_jenis,
                'nama_jenis'   => $i->post('nama'),
                'deskripsi'   => $i->post('deskripsi')
            );
            $this->Crud_model->edit('tbl_jenis', 'kode_jenis', $kode_jenis, $data);
            $this->session->set_flashdata('msg', ' Data telah diedit');
            redirect('admin/jenis/edit/' . $kode_jenis, 'refresh');
        }
    }

    function detail($kode_jenis)
    {

        $penanganan = $this->Crud_model->listingOneAll('tbl_penanganan', 'kode_jenis', $kode_jenis);
        $data = [
            'penanganan' => $penanganan,
            'content'  => 'admin/jenis/detail'
        ];
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function delete($kode_jenis)
    {
        $this->Crud_model->delete('tbl_jenis', 'kode_jenis', $kode_jenis);
        redirect('admin/jenis', 'refresh');
    }

    function ubahPenanganan($id_penanganan, $kode_jenis)
    {
        $data = array(
            'deskripsi'   => $this->input->post('deskripsi')
        );
        $this->Crud_model->edit('tbl_penanganan', 'id_penanganan', $id_penanganan, $data);
        $this->session->set_flashdata('msg', ' Data telah diedit');
        redirect('admin/jenis/detail/' . $kode_jenis, 'refresh');
    }
}
