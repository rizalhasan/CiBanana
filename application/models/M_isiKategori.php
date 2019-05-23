<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_isiKategori extends CI_Model{

	public function edit($id){
		$data = array(
			'nama' => $this->input->post('nama')
		);

		$this->db->where('id_kategori', $id);
		$this->db->update('categories', $data);
	}

	public function view_by($id){
		$this->db->where('id_kategori', $id);
		return $this->db->get('categories')->row();
	}

	public function delete($id){
		$this->db->where('id_kategori', $id);
		$this->db->delete('categories');
	}

	public function view(){
		$this->db->order_by('nama', 'ASC');
		return $this->db->get('categories')->result();
		//$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
		//$this->db->order_by("judul","tanggal","author","isi","kategori","views");
		//return $this->db->get('news')->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('nama', 'nama', 'required');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}

	public function save(){
		$data = array(
			'nama' => $this->input->post('nama'),
		);

		$this->db->insert('nama', $data);
	}

}
?>
?>
