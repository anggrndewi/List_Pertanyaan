<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data =[
            'title' => 'List Pertanyaan'
        ];

        echo view('admin/list',$data);
    }
}
