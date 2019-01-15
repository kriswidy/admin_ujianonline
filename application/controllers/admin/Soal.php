<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('soal_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["tbl_soal"] = $this->soal_model->getAll();
		$this->load->view('admin/soal/list', $data);
	}

	public function add(){
		$soal = $this->soal_model;
		$validation = $this->form_validation;
		$validation->set_rules($soal->rules());

		if ($validation->run()) {
			$soal->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		} 
			$this->load->view('admin/soal/new_form');
	}

	public function edit($id = null){
		if (!isset($id)) redirect('admin/soal'); 

		$soal = $this->soal_model;
		$validation = $this->form_validation;
		$validation->set_rules($soal->rules());

		if ($validation->run()) {
			$soal->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["tbl_soal"] = $soal->getById($id);
		if (!$data["tbl_soal"]) show_404();

		$this->load->view('admin/soal/edit_form', $data);
	}

	public function delete($id=null){
		if (!isset($id)) show_404();

		if ($this->soal_model->delete($id)) {
			redirect(site_url('admin/soal'));
		}
	}

}

/* End of file Soal.php */
/* Location: ./application/controllers/admin/Soal.php */