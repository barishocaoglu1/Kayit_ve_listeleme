<?php

class Loginmod extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /* veritabanı tablosunun adı 'login' view ile karıştırma! */
    public $tableName = "login";

    public function insert($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }


    public function get_all(){
        return $this->db->get($this->tableName)->result();
    }
}
