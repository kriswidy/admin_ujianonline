<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	private $_table = "tbl_user";

	public $id_user;
	public $nama_user;
	public $email;
	public $username;
	public $password;
	public $level;

	public function rules(){
		return[
			['field' => 'nama_user',
			'label' => 'Nama_user',
			'rules' => 'required'],

			['field' => 'email',
			'label' => 'Email',
			'rules' => 'required'],

			['field' => 'username',
			'label' => 'Username',
			'rules' => 'required'],

			['field' => 'password',
			'label' => 'Password',
			'rules' => 'required'],

			['field' => 'level',
			'label' => 'Level',
			'rules' => 'required']

		];
	}

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ["id_user"=>$id])->row();
	}

	public function save(){
		$post = $this->input->post();
		$this->id_user = uniqid();
		$this->nama_user = $post["nama_user"];
		$this->email = $post["email"];
		$this->username = $post["username"];
		$this->password = $post["password"];
		$this->level = $post["level"];
		$this->db->insert($this->_table, $this); 
	}

	public function update(){
		$post = $this->input->post();
		$this->id_user = $post["id"];
		$this->nama_user = $post["nama_user"];
		$this->email = $post["email"];
		$this->username = $post["username"];
		$this->password = $post["password"];
		$this->level = $post["level"];
		$this->db->update($this->_table, $this, array('id_user' => $post['id']));		
	}

	public function delete($id){
		return $this->db->delete($this->_table, array('id_user' => $id));
	}
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */