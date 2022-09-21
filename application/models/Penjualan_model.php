<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get_data()
    {
        $q = "
            select
                *
            from
                tb_header
            order by
                no_nota
        ";
        return $this->db->query($q)->result();
    }

    function insert($data)
    {
        $this->db->insert('tb_header', $data);
    }

    function get_data_by_id($id)
    {
        $q = "
            select
                *
            from
                tb_header
            where
                id = ".$id."
            order by
                no_nota
        ";
        return $this->db->query($q)->row();
    }

}
