<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class M_admin extends CI_Model{

	public function edit($id)
	{
		$data = array(
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'telepon' => $this->input->post('tlp')
		);

		$this->db->where('id_admin', $id);
		$this->db->update('admin_web', $data);
	}

	public function view_by($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->get('admin_web')->row();
	}

	public function delete($id)
	{
		$this->db->where('id_admin', $id);
		$this->db->delete('admin_web');
	}

	public function view()
	{
		$this->db->order_by('username', 'ASC');
		$this->db->select("*");
		return $this->db->get("admin_web")->result();
	}

	public function validation($mode)
	{
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
			$this->form_validation->set_rules('tlp', 'Telepon', 'required|trim');
			$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin_web.username]');
			$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
			$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
			if($this->form_validation->run())
				return TRUE;
			else
				return FALSE;
	}

	public function save()
	{
		$data = array(
			'username' => $this->input->post('username'), 
			'password' => $this->input->post('password1'),
			'nama' => $this->input->post('nama'),
			'telepon' => $this->input->post('tlp'),
			'jabatan' => 'Owner'
		);

		$this->db->insert('admin_web', $data);
	}
}
?>
