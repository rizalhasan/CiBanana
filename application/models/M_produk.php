<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_produk extends CI_Model{

	public function edit($id)
	{
		$data = array(
			'category' => $this->input->post('category'), 
			'nama_produk' => $this->input->post('nama_produk'),
			'deskripsi' => $this->input->post('deskripsi'),
			'harga' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'views' => $this->input->post('views'),
		);

		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}

	public function view_by($id)
	{
		$this->db->where('id_produk', $id);
		return $this->db->get('produk')->row();
	}

	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}

	public function view()
	{
		$this->db->select("*");
		return $this->db->get("produk")->result();
	}

	public function validation($mode)
	{
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('category', 'Category', 'required|trim');
			$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
			$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
			$this->form_validation->set_rules('stok', 'Stok', 'required|trim');
			$this->form_validation->set_rules('views', 'Views', 'required|trim');
		
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}

	public function save()
	{
		$data = array(
			'category' => $this->input->post('category'), 
			'nama_produk' => $this->input->post('nama_produk'),
			'deskripsi' => $this->input->post('deskripsi'),
			'harga' => $this->input->post('harga'),
			'stok' => $this->input->post('stok'),
			'views' => $this->input->post('views')	
		);

		$this->db->insert('produk', $data);
	}
}
?>
