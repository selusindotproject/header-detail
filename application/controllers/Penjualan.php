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
        $data_brg = $this->Penjualan_model->get_data();
        $data = array(
            'data_brg' => $data_brg
        );
        $this->load->view('penjualan_list', $data);
    }

    public function create()
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

    public function create_action()
    {
        $data = array(
            'no_nota' => $this->input->post('no_nota', true),
            'tgl' => $this->input->post('tgl', true),
            'total' => $this->input->post('total', true),
        );

        /**
         * simpan data di tabel header
         */
        $this->Penjualan_model->insert($data);


        /**
         * ambil nilai primary key pada tabel header ... pada data terbaru
         */
        $insert_id = $this->db->insert_id();

        /**
         * collecting data detail
         */
        //
        $data = $this->input->post();
        foreach ($data['kode_brg'] as $key => $item) {
            $detail = [
                'header_id' => $insert_id,
                'kode_brg' => $item,
                'qty' => $data['qty'][$key],
                'harga' => $data['harga'][$key],
            ];
            $this->db->insert('tb_detail', $detail);
        }
        redirect(site_url());
    }

}
