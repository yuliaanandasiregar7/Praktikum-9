<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
        $this->load->model('matakuliah_model', 'matkul1');
        $this->matkul1->nama = 'Pemrograman Web';
        $this->matkul1->sks = '3';
        $this->matkul1->kode = 'PW';

        $this->load->model('matakuliah_model', 'matkul2');
        $this->matkul2->nama = 'Basis Data';
        $this->matkul2->sks = '4';
        $this->matkul2->kode = 'BD';

        $this->load->model('matakuliah_model', 'matkul3');
        $this->matkul3->nama = 'User Interface/User Experience';
        $this->matkul3->sks = '3';
        $this->matkul3->kode = 'UI/UX';

        $this->load->model('matakuliah_model', 'matkul4');
        $this->matkul4->nama = 'Jaringan Komputer';
        $this->matkul4->sks = '3';
        $this->matkul4->kode = 'JARKOM';

        $this->load->model('matakuliah_model', 'matkul5');
        $this->matkul5->nama = 'Pendidikan Kewarganegaraan';
        $this->matkul5->sks = '3';
        $this->matkul5->kode = 'PPKN';


        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5];

        $data['list_matkul'] = $list_matkul;

        $this->load->view('matakuliah/Header2.php');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('matakuliah/Footer2.php');

	}
}
