<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
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
                tb_barang
            order by
                nama_brg
        ";
        return $this->db->query($q)->result();
    }

}
