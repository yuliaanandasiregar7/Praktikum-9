<?php

// buat class
class Mahasiswa_model extends  CI_Model{
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Bagus";
        return $predikat;
    }
}

?>