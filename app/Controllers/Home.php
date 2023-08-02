<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->db = db_connect();
        $data = [
            'list' => $this->db->query('SELECT * FROM saku ORDER BY id DESC')->getResult(),
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
    
    public function ubah($id)
    {
        $this->db = db_connect();
        $data = [
            'data' => $this->db->query("SELECT * FROM saku WHERE id='$id'")->getRow(),
        ];
        echo view('layout/header');
        echo view('admin/ubah',$data);
        echo view('layout/footer');
    }
    
    public function presUbah()
    {
        $this->db = db_connect();
        $id = $this->request->getPost('id');
        $pertanyaan = $this->request->getPost('pertanyaan');
        $jawaban = $this->request->getPost('jawaban');
        $update = $this->db->query("UPDATE `saku` SET `pertanyaan`='$pertanyaan', `jawaban`='$jawaban' WHERE `id`='$id'");
        if($update){
            return redirect()->to('/admin')->with('message', 'Berhasil Ubah Data!');
        }else{
            return redirect()->back()->with('message', 'Gagal Ubah Data!');
        }
    }
}
