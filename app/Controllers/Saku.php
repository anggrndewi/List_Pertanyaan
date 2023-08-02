<?php

namespace App\Controllers;
use App\Models\sakuModel;

class Saku extends BaseController
{
    public function index()
	{
		echo view('layout/header');
		echo view('search.php');
        echo view('layout/footer');
	}

    public function search()
    {
        $saku = new sakuModel();
        $search = $this->request->getGet('search');
        $data = $saku->like('pertanyaan', $search)-> orlike('jawaban', $search)->findAll();
        // echo $search;
        return view('hasil_pencarian',  compact('data'));
    }

    public function detail($id=NULL)
    {
        $saku = new sakuModel();
        
        $data = ['saku' => $saku->WHERE('id', $id)->find()];

        echo view('layout/header');
        echo view('detail', $data);
        echo View('layout/footer');  

    }
}
