<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_konfirmasi extends CI_Model{

	public function edit($id){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'nama_bank' => $this->input->post('nama_bank'),
			'jumlah_transfer' => $this->input->post('jumlah_transfer'),
			'alamat_kirim' => $this->input->post('alamat_kirim'),
			'id_pembelian' => $this->input->post('id_pembelian'),
			'bukti' => $this->load->post('bukti')
		);

		$this->db->where('id_order', $id);
		$this->db->update('konfirmasi', $data);
	}

	public function view_by($id){
		$this->db->where('id_order', $id);
		return $this->db->get('konfirmasi')->row();
	}

	public function delete($id){
		$this->db->where('id_order', $id);
		$this->db->delete('konfirmasi');
	}

	public function view(){
		return $this->db->get('konfirmasi')->result();
		//$query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
		//$this->db->order_by("judul","tanggal","author","isi","kategori","views");
		//return $this->db->get('news')->result();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
			$this->form_validation->set_rules('nama_pemilik', 'nama_pemilik', 'required');
			$this->form_validation->set_rules('nama_bank', 'nama_bank', 'required');
			$this->form_validation->set_rules('jumlah_transfer', 'jumlah_transfer', 'required');
			$this->form_validation->set_rules('alamat_kirim', 'alamat_kirim', 'required');
			$this->form_validation->set_rules('id_pembelian', 'id_pembelian', 'required');
			$this->form_validation->set_rules('bukti', 'bukti', 'required');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}

	public function save(){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'nama_bank' => $this->input->post('nama_bank'),
			'jumlah_transfer' => $this->input->post('jumlah_transfer'),
			'alamat_kirim' => $this->input->post('alamat_kirim'),
			'id_pembelian' => $this->input->post('id_pembelian'),
			'bukti' => $this->load->post('bukti')
		);

		$this->db->insert('konfirmasi', $data);
	}

}
?>