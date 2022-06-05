<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
        $this->load->model('dosen_model', 'dsn1');

        $this->dsn1->id = 1;
        $this->dsn1->nidn = '010001';
        $this->dsn1->nama = 'Lukman Rosyidi';
        $this->dsn1->gender = 'L';
        $this->dsn1->pendidikan = 'S3';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = '020002';
        $this->dsn2->nama = 'Tifany Nabarian';
        $this->dsn2->gender = 'P';
        $this->dsn2->pendidikan = 'S2';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nidn = '030003';
        $this->dsn3->nama = 'Ammar Hafaz';
        $this->dsn3->gender = 'L';
        $this->dsn3->pendidikan = 'S1';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

        $data['list_dsn'] = $list_dsn;

        // load view
        // $this->load->view('dosen/Header1.php');
        // $this->load->view('dosen/index', $data);
        // $this->load->view('dosen/Footer1.php');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');



	}

        public function create(){
        $data["judul"] ="Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('layout/footer');

        }
        public function save(){
        $this->load->model('dosen_model', 'dsn');

        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');

        $data['dsn'] = $this->dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');

                
        }
}
