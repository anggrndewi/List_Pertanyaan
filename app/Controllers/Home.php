<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->db = db_connect();
        $data = [
            'list' => $this->db->query('SELECT * FROM saku')->getResult(),
        ];
        echo view('layout/header');
        echo view('admin/list',$data);
        echo view('layout/footer');
    }
}
