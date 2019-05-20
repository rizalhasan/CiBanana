<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_artikel extends CI_Model{

	public function edit($id){
		$data = array(
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'author' => $this->input->post('author'),
			'isi' => $this->input->post('isi'),
			'kategori' => $this->input->post('kategori'),
			'views' => $this->input->post('views')
		);

		$this->db->where('id', $id);
		$this->db->update('news', $data);
	}

	public function view_by($id){
		$this->db->where('id', $id);
		return $this->db->get('news')->row();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('news');
	}

	public function view(){
		return $this->db->get('news')->result();
		//$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
		//$this->db->order_by("judul","tanggal","author","isi","kategori","views");
		//return $this->db->get('news')->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('judul', 'judul', 'required');
			$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
			$this->form_validation->set_rules('author', 'author', 'required');
			$this->form_validation->set_rules('isi', 'isi', 'required');
			$this->form_validation->set_rules('kategori', 'kategori', 'required');
			$this->form_validation->set_rules('views', 'views', 'required');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}

	public function save(){
		$data = array(
			'judul' => $this->input->post('judul'),
			'tanggal' => $this->input->post('tanggal'),
			'author' => $this->input->post('author'),
			'isi' => $this->input->post('isi'),
			'kategori' => $this->input->post('kategori'),
			'views' => $this->input->post('views')
		);

		$this->db->insert('news', $data);
	}

}
?>