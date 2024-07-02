<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = "data mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function cari_mahasiswa(){
        $data['judul'] = "data mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
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

    public function tambah_mahasiswa(){
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');exit;
        }
    }
    public function hapus_mahasiswa($id){
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');exit;
        }
    }
    public function ubah_mahasiswa(){
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');exit;
        }
    }
    public function tampilkan_mahasiswa(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }
}