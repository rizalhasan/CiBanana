<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_khimar extends CI_Model{

	public function edit($id){
		$data = array(
			'nama_produk' => $this->input->post('nama'), 
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi')
		);

		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}

	public function view_by($id){
		$this->db->where('id_produk', $id);
		return $this->db->get('produk')->row();
	}

	public function delete($id){
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}

	public function view(){
		$this->db->where("category",'Khimar');
		$this->db->select("*");
		return $this->db->get("produk")->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('stok', 'Stok', 'required');
			$this->form_validation->set_rules('harga', 'Harga', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}

	public function save(){
		$data = array(
			'nama_produk' => $this->input->post('nama'), 
			'category' => 'Khimar',
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi')
		);

		$this->db->insert('produk', $data);
	}

}
?>
