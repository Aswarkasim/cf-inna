<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_user();
        $this->load->model('CF_model', 'CF');
    }

    public function index()
    {
        $pengetahuan = $this->CF->listPengetahuan();
        $data = array(
            'title'     => 'Manjemen Pengetahuan',
            'add'       => 'admin/pengetahuan/add',
            'edit'      => 'admin/pengetahuan/edit/',
            'delete'    => 'admin/pengetahuan/delete/',
            'pengetahuan'    => $pengetahuan,
            'content'       => 'admin/pengetahuan/list',
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->load->helper('string');

        $jenis = $this->Crud_model->listing('tbl_jenis');
        $gejala = $this->Crud_model->listing('tbl_gejala');
        $valid = $this->form_validation;
        $valid->set_rules(
            'pertanyaaan',
            'required',
            array('required' => ' %s harus diisi')
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'title'     => 'Manjemen Pengetahuan',
                'add'       => 'admin/pengetahuan/add',
                'back'      => 'admin/pengetahuan',
                'jenis'     => $jenis,
                'gejala'     => $gejala,
                'content'       => 'admin/pengetahuan/add',
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'kode_pengetahuan'   => random_string('numeric', 5),
                'kode_jenis'   => $i->post('kode_jenis'),
                'kode_gejala'   => $i->post('kode_gejala'),
                'pertanyaan'   => $i->post('pertanyaan')
            );
            $this->Crud_model->add('tbl_pengetahuan', $data);
            $this->session->set_flashdata('msg', ' Data telah ditambah');
            redirect('admin/pengetahuan/add', 'refresh');
        }
    }

    public function edit($kode_pengetahuan)
    {
        $jenis = $this->Crud_model->listing('tbl_jenis');
        $gejala = $this->Crud_model->listing('tbl_gejala');
        $pengetahuan = $this->Crud_model->listingOne('tbl_pengetahuan', 'kode_pengetahuan', $kode_pengetahuan);
        $valid = $this->form_validation;
        $valid->set_rules(
            'pertanyaan',
            'Pertanyaan',
            'required',
            array('required' => ' %s harus diisi')
        );

        if ($valid->run() === FALSE) {
            $data = array(
                'title'     => 'Manjemen Pengetahuan',
                'edit'       => 'admin/pengetahuan/edit/' . $pengetahuan->kode_pengetahuan,
                'back'      => 'admin/pengetahuan',
                'pengetahuan'    => $pengetahuan,
                'jenis'     => $jenis,
                'gejala'     => $gejala,
                'content'       => 'admin/pengetahuan/edit',
            );
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = array(
                'kode_pengetahuan'   => $kode_pengetahuan,
                'kode_jenis'   => $i->post('kode_jenis'),
                'kode_gejala'   => $i->post('kode_gejala'),
                'pertanyaan'   => $i->post('pertanyaan'),
            );
            $this->Crud_model->edit('tbl_pengetahuan', 'kode_pengetahuan', $kode_pengetahuan, $data);
            $this->session->set_flashdata('msg', ' Data telah diedit');
            redirect('admin/pengetahuan/edit/' . $kode_pengetahuan, 'refresh');
        }
    }

    function delete($kode_pengetahuan)
    {
        $this->Crud_model->delete('tbl_pengetahuan', 'kode_pengetahuan', $kode_pengetahuan);
        $this->session->set_flashdata('msg', 'Data telah dihapus');
        redirect('admin/pengetahuan', 'refresh');
    }
}
