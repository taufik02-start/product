<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model {
    var $table = 'product';
    public function __construct(){
        parent::__construct($this->table);
    }
    
    public function getProducts($search){
        $this->db->select('*');
        $this->db->from($this->table);
        if($search){
            $this->db->like('nama_produk',$search);
        }
        return $this->db->get()->result_array();
    }
}