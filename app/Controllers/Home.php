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
    
    public function delete($id)
    {
        $this->db = db_connect();
        $delete = $this->db->query("DELETE FROM saku WHERE id='$id'");
        if($delete){
            return redirect()->back()->with('message', 'Berhasil Hapus Data!');
        }else{
            return redirect()->back()->with('message', 'Gagal Hapus Data!');
        }
    }
    
    public function tambah()
    {
        $this->db = db_connect();
        $pertanyaan = $this->request->getPost('pertanyaan');
        $jawaban = $this->request->getPost('jawaban');
        $insert = $this->db->query("INSERT INTO `saku`.`saku` (`pertanyaan`, `jawaban`) VALUES ('$pertanyaan','$jawaban')");
        if($insert){
            return redirect()->back()->with('message', 'Berhasil Tambah Data!');
        }else{
            return redirect()->back()->with('message', 'Gagal Tambah Data!');
        }
    }
}
