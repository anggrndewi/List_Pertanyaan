<?php

namespace App\Controllers;

class Saku extends BaseController
{
    public function index()
	{
		echo view('layout/header');
		echo view('search.php');
        echo view('layout/footer');
	}

    public function lihat()
    {
        
    }
}
