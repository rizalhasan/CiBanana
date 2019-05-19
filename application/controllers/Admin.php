<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_khimar');
		$this->load->model('M_admin');
		$this->load->model('M_produk');
		function convRupiah($angka){
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}
	}							

	public function edit_admin($id)
	{
		if($this->input->post('submit')){
			if($this->M_admin->validation("update")){
				$this->M_admin->edit($id);
				redirect('admin/admin');
			}
		}

		$data['admin'] = $this->M_admin->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/admin/vEdit_admin', $data);
		$this->load->view('admin/theme/footer');		
	}

	public function cek_admin($id)
	{
		$data['admin'] = $this->M_admin->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/admin/vCek_admin', $data);
		$this->load->view('admin/theme/footer');
	}

	public function index()
	{
		$this->load->view('admin/theme/header');
		$this->load->view('admin/vIndex');
		$this->load->view('admin/theme/footer');
	}

	public function hapus_admin($id)
	{
		$this->M_admin->delete($id);
		redirect('Admin/admin');
	}

	public function tambah_admin(){
		if($this->input->post('submit')){
			if($this->M_admin->validation("save")){
				$this->M_admin->save();
				redirect('Admin/admin');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/admin/vForm_admin');
		$this->load->view('admin/theme/footer');
	}

	public function form_admin(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/admin/vForm_admin');
		$this->load->view('admin/theme/footer');
	}

	public function admin(){
		$data['admin'] = $this->M_admin->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/admin/vTable_admin', $data);
		$this->load->view('admin/theme/footer');
	}

	public function kategori(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/kategori/vTable_kategori');
		$this->load->view('admin/theme/footer');			
	}

	public function beranda(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/beranda/vIndex');
		$this->load->view('admin/theme/footer');	
	}

	public function edit_khimar($id){
		if($this->input->post('submit')){
			if($this->M_khimar->validation("update")){
				$this->M_khimar->edit($id);
				redirect('admin/khimar');
			}
		}

		$data['khimar'] = $this->M_khimar->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/edit_khimar', $data);
		$this->load->view('admin/theme/footer');		
	}

	public function lihat_khimar($id){
		$data['khimar'] = $this->M_khimar->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/cek_khimar', $data);
		$this->load->view('admin/theme/footer');
	}

	public function hapus_khimar($id){
		$this->M_khimar->delete($id);
		redirect('admin/khimar');
	}

	public function khimar(){ 
		$data['khimar'] = $this->M_khimar->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/table_khimar', $data);
		$this->load->view('admin/theme/footer');
	}

	public function form_khimar(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/form_khimar');
		$this->load->view('admin/theme/footer');
	}
 
	public function tambah_khimar(){
		if($this->input->post('submit')){
			if($this->M_khimar->validation("save")){
				$this->M_khimar->save();
				redirect('admin/khimar');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/khimar/form_khimar');
		$this->load->view('admin/theme/footer');
	}


//PRODUK
	public function tambah_produk(){
		if($this->input->post('submit')){
			if($this->M_produk->validation("save")){
				$this->M_produk->save();
				redirect('Admin/produk');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/produk/vForm_produk');
		$this->load->view('admin/theme/footer');
	}

	public function form_produk(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/produk/vForm_produk');
		$this->load->view('admin/theme/footer');
	}

		public function produk(){
		$data['admin'] = $this->M_produk->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/produk/vTable_produk', $data);
		$this->load->view('admin/theme/footer');
	}

	public function hapus_produk($id)
	{
		$this->M_produk->delete($id);
		redirect('Admin/produk');
	}

	public function cek_produk($id)
	{
		$data['admin'] = $this->M_produk->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/produk/vCek_produk', $data);
		$this->load->view('admin/theme/footer');
	}

		public function edit_produk($id)
	{
		if($this->input->post('submit')){
			if($this->M_produk->validation("update")){
				$this->M_produk->edit($id);
				redirect('admin/produk');
			}
		}

		$data['admin'] = $this->M_produk->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/produk/vEdit_produk', $data);
		$this->load->view('admin/theme/footer');		
	}

}
