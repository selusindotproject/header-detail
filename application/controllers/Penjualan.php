<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model');
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data = $this->Penjualan_model->get_data();
        $this->load->view('penjualan_list');
    }

    public function tambah()
    {
        $data_barang = $this->Barang_model->get_data();
        $data = array(
            'no_nota' => '',
            'tgl' => date('Y-m-d'),
            'total' => 0,
            'data_barang' => $data_barang,
        );
        $this->load->view('penjualan_form', $data);
    }

}
