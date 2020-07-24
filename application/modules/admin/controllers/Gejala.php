<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_user();
    }

    public function index()
    {
        $gejala = $this->Crud_model->listing('tbl_gejala');
        $data = array(
            'title'     => 'Manjemen Gejala',
            'add'       => 'admin/gejala/add',
            'edit'      => 'admin/gejala/edit/',
            'delete'    => 'admin/gejala/delete/',
            'gejala'    => $gejala,
            'content'       => 'admin/gejala/list',
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'kode',
            'Kode Gejala',
            'required|is_unique[tbl_gejala.kode_gejala]|max_length[4]',
            array(
                'required' => ' %s harus diisi',
                'is_unique' => 'Kode telah ada. Masukkan kode yang lain',
                'max_length' => 'panjang maksimal kode gejala adalah 4 karakter'
            )
        );
        $valid->set_rules(
            'nama',
            'Nama Gejala',
            'required',
            array('required' => ' %s harus diisi')
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'title'     => 'Manjemen Gejala',
                'add'       => 'admin/gejala/add',
                'back'      => 'admin/gejala',
                'content'       => 'admin/gejala/add',
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'kode_gejala'   => $i->post('kode'),
                'nama_gejala'   => $i->post('nama'),
                'nilai_cf'   => $i->post('nilai_cf')
            );
            $this->Crud_model->add('tbl_gejala', $data);
            $this->session->set_flashdata('msg', ' Data telah ditambah');
            redirect('admin/gejala/add', 'refresh');
        }
    }

    public function edit($kode_gejala)
    {
        $gejala = $this->Crud_model->listingOne('tbl_gejala', 'kode_gejala', $kode_gejala);
        $valid = $this->form_validation;
        $valid->set_rules(
            'kode',
            'Kode Gejala',
            'required|max_length[4]',
            array(
                'required' => ' %s harus diisi',
                'max_length' => 'panjang maksimal kode gejala adalah 4 karakter'
            )
        );
        $valid->set_rules(
            'nama',
            'Nama Gejala',
            'required',
            array('required' => ' %s harus diisi')
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'title'     => 'Manjemen Gejala',
                'edit'       => 'admin/gejala/edit/',
                'back'      => 'admin/gejala',
                'gejala'    => $gejala,
                'content'       => 'admin/gejala/edit',
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'kode_gejala'   => $i->post('kode'),
                'nama_gejala'   => $i->post('nama'),
                'nilai_cf'   => $i->post('nilai_cf')
            );
            $this->Crud_model->edit('tbl_gejala', 'kode_gejala', $kode_gejala, $data);
            $this->session->set_flashdata('msg', ' Data telah diedit');
            redirect('admin/gejala', 'refresh');
        }
    }

    function delete($kode_gejala)
    {
        $this->Crud_model->delete('tbl_gejala', 'kode_gejala', $kode_gejala);
        $this->session->set_flashdata('msg', 'Data telah dihapus');
        redirect('admin/gejala', 'refresh');
    }
}
