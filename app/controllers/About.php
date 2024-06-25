<?php

class about extends Controller{
    public function index($nama = "null", $pekerjaan = "tidak ada"){
        $data["judul"] = 'about';
        $this->view("templates/header", $data);
        $this->view("about/index", [$nama, $pekerjaan]);
        $this->view("templates/footer");
    }
    public function page(){
        $data["judul"] = 'about';
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}