<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = "data mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail_mahasiswa($id){
        $data['judul'] = "detail mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail_mahasiswa', $data);
        $this->view('templates/footer');
    }
}