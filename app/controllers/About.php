<?php

class about{
    public function index($nama = "null", $pekerjaan = "tidak ada"){
        echo "Halo nama saya $nama, pekerjaan saya adalah $pekerjaan";
    }
    public function page(){
        echo "ini adalah sebuah controller page method page";
    }
}