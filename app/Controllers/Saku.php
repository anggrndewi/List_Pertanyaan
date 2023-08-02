<?php

namespace App\Controllers;

defined('BASEPATH') or exit('No direct script access allowed');

class Saku extends BaseController
{
    public function index()
	{
		$data['keyword'] = $this->input->get('keyword');
		$this->load->model('sakuModel');

		$data['search_result'] = $this->sakuModel->search($data['keyword']);
        
        echo view('layout/header');
		$this->load->view('search.php', $data);
        echo view('layout/footer');
	}

    public function lihat()
    {
        echo view('layout/header');
		echo view('search.php');
        echo view('layout/footer');
    }
}
