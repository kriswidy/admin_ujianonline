<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model {
	
	private $_table = "tbl_soal";

	public $id_soal;
	public $id_mapel;
	public $pertanyaan;
	public $pilihan_a;
	public $pilihan_b;
	public $pilihan_c;
	public $pilihan_d;
	public $skor_a;
	public $skor_b;
	public $skor_c;
	public $skor_d;
	public $kunci;

	public function rules(){
		return[
			['field' => 'id_mapel',
			'label' => 'Id_mapel',
			'rules' => 'numeric'
			],

			['field' => 'pertanyaan',
			'label' => 'Pertanyaan',
			'rules' => 'required'
			],
			
			['field' => 'pilihan_a',
			'label' => 'Pilihan_a',
			'rules' => 'required'
			],
			
			['field' => 'pilihan_b',
			'label' => 'Pilihan_b',
			'rules' => 'required'
			],
			
			['field' => 'pilihan_c',
			'label' => 'Pilihan_c',
			'rules' => 'required'
			],
			
			['field' => 'pilihan_d',
			'label' => 'Pilihan_d',
			'rules' => 'required'
			],
			
			['field' => 'skor_a',
			'label' => 'Skor_a',
			'rules' => 'numeric'
			],
			
			['field' => 'skor_b',
			'label' => 'Skor_b',
			'rules' => 'numeric'
			],
			
			['field' => 'skor_c',
			'label' => 'Skor_c',
			'rules' => 'numeric'
			],
			
			['field' => 'skor_d',
			'label' => 'Skor_d',
			'rules' => 'numeric'
			],
			
			['field' => 'kunci',
			'label' => 'Kunci',
			'rules' => 'required'
			]
		];
	}

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}

	public function getById($id){
		return $this->db->get_where($this->_table, ["id_soal"=>$id])->row();
	}

	public function save(){
		$post = $this->input->post();
		$this->id_soal = uniqid();
		$this->id_mapel = $post["id_mapel"];
		$this->pertanyaan = $post["pertanyaan"];
		$this->pilihan_a = $post["pilihan_a"];
		$this->pilihan_b = $post["pilihan_b"];
		$this->pilihan_c = $post["pilihan_c"];
		$this->pilihan_d = $post["pilihan_d"];
		$this->skor_a = $post["skor_a"];
		$this->skor_b = $post["skor_b"];
		$this->skor_c = $post["skor_c"];
		$this->skor_d = $post["skor_d"];
		$this->kunci = $post["kunci"];
		$this->db->insert($this->_table, $this);
	}

	public function update(){
		$post = $this->input->post();
		$this->id_soal = $post["id"];
		$this->id_mapel = $post["id_mapel"];
		$this->pertanyaan = $post["pertanyaan"];
		$this->pilihan_a = $post["pilihan_a"];
		$this->pilihan_b = $post["pilihan_b"];
		$this->pilihan_c = $post["pilihan_c"];
		$this->pilihan_d = $post["pilihan_d"];
		$this->skor_a = $post["skor_a"];
		$this->skor_b = $post["skor_b"];
		$this->skor_c = $post["skor_c"];
		$this->skor_d = $post["skor_d"];
		$this->kunci = $post["kunci"];
		$this->db->update($this->_table, $this, array('id_soal'=> $post['id']));
	}

	public function delete($id){
		return $this->db->delete($this->_table, array('id_soal' => $id ));
	}

}

/* End of file Soal_model.php */
/* Location: ./application/models/Soal_model.php */