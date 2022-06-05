<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '0110221073';
        $this->mhs1->nama = 'Yulia Ananda Siregar';
        $this->mhs1->gender = 'P';
        $this->mhs1->ipk = 3.96;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '0110221092';
        $this->mhs2->nama = 'Azbin Qiyas Siregar';
        $this->mhs2->gender = 'L';
        $this->mhs2->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = '0110221082';
        $this->mhs3->nama = 'Muna Nisrina';
        $this->mhs3->gender = 'P';
        $this->mhs3->ipk = 3.55;

        $this->load->model('mahasiswa_model', 'mhs4');
        $this->mhs4->id = 3;
        $this->mhs4->nim = '0110221072';
        $this->mhs4->nama = 'Abdillah Alamsyah';
        $this->mhs4->gender = 'L';
        $this->mhs4->ipk = 3.45;

        $this->load->model('mahasiswa_model', 'mhs5');
        $this->mhs5->id = 3;
        $this->mhs5->nim = '0110221065';
        $this->mhs5->nama = 'Ayra Lestari';
        $this->mhs5->gender = 'P';
        $this->mhs5->ipk = 3.83;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3, $this->mhs4, $this->mhs5];

        $data['list_mhs'] = $list_mhs;

        $this->load->view('Header.php');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('Footer.php');
	}
}
