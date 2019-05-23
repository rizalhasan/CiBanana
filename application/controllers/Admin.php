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
		$this->load->model('M_artikel');
		$this->load->model('M_isiKategori');
		$this->load->model('M_konfirmasi');

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
		$data['kategori'] = $this->M_isiKategori->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/produk/vForm_produk', $data);
		$this->load->view('admin/theme/footer');
	}

	public function produk(){
		$data['produk'] = $this->M_produk->view();
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


//ARTIKEL

	public function artikel(){
		$data['artikel'] = $this->M_artikel->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/table_artikel', $data);
		$this->load->view('admin/theme/footer');
	}
	public function form_artikel(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/form_artikel');
		$this->load->view('admin/theme/footer');
	}
	public function tambah_artikel(){
		if($this->input->post('submit')){
			if($this->M_artikel->validation("save")){
				$this->M_artikel->save();
				redirect('admin/artikel');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/form_artikel');
		$this->load->view('admin/theme/footer');
	}
	public function edit_artikel($id){
		if($this->input->post('submit')){
			if($this->M_artikel->validation("update")){
				$this->M_artikel->edit($id);
				redirect('admin/artikel');
			}
		}

		$data['artikel'] = $this->M_artikel->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/edit_artikel', $data);
		$this->load->view('admin/theme/footer');		
	}

	public function lihat_artikel($id){
		$data['artikel'] = $this->M_artikel->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/artikel/cek_artikel', $data);
		$this->load->view('admin/theme/footer');
	}

	public function hapus_artikel($id){
		$this->M_artikel->delete($id);
		redirect('admin/artikel');
	}


//isikategori 
	public function isiKategori(){
		$data['isiKategori'] = $this->M_isiKategori->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/isiKategori/table_isiKategori', $data);
		$this->load->view('admin/theme/footer');
	}
	public function form_isiKategori(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/isiKategori/form_isiKategori');
		$this->load->view('admin/theme/footer');
	}
	public function tambah_isiKategori(){
		if($this->input->post('submit')){
			if($this->M_isiKategori->validation("save")){
				$this->M_isiKategori->save();
				redirect('admin/isiKategori');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/isiKategori/form_isiKategori');
		$this->load->view('admin/theme/footer');
	}
	public function edit_isiKategori($id){
		if($this->input->post('submit')){
			if($this->M_isiKategori->validation("update")){
				$this->M_isiKategori->edit($id);
				redirect('admin/isiKategori');
			}
		}

		$data['isiKategori'] = $this->M_isiKategori->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/isiKategori/edit_isiKategori', $data);
		$this->load->view('admin/theme/footer');		
	}

	public function lihat_isiKategori($id){
		$data['artikel'] = $this->M_artikel->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/isiKategori/cek_isiKategori', $data);
		$this->load->view('admin/theme/footer');
	}

	public function hapus_isiKategori($id){
		$this->M_isiKategori->delete($id);
		redirect('admin/isiKategori');
	}



//KONFIRMASI 
	public function konfirmasi(){
		$data['konfirmasi'] = $this->M_konfirmasi->view();
		$this->load->view('admin/theme/header');
		$this->load->view('admin/konfirmasi/table_konfirmasi', $data);
		$this->load->view('admin/theme/footer');
	}
	public function form_konfirmasi(){
		$this->load->view('admin/theme/header');
		$this->load->view('admin/konfirmasi/form_konfirmasi');
		$this->load->view('admin/theme/footer');
	}
	public function tambah_konfirmasi(){
		if($this->input->post('submit')){
			if($this->M_konfirmasi->validation("save")){
				$this->M_konfirmasi->save();
				redirect('admin/konfirmasi');
			}
		}

		$this->load->view('admin/theme/header');
		$this->load->view('admin/konfirmasi/form_konfirmasi');
		$this->load->view('admin/theme/footer');
	}
	public function edit_konfirmasi($id){
		if($this->input->post('submit')){
			if($this->M_konfirmasi->validation("update")){
				$this->M_konfirmasi->edit($id);
				redirect('admin/isiKategori');
			}
		}

		$data['konfirmasi'] = $this->M_konfirmasi->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/konfirmasi/edit_konfirmasi', $data);
		$this->load->view('admin/theme/footer');		
	}

	public function lihat_konfirmasi($id){
		$data['konfirmasi'] = $this->M_konfirmasi->view_by($id);
		$this->load->view('admin/theme/header');
		$this->load->view('admin/konfirmasi/cek_konfirmasi', $data);
		$this->load->view('admin/theme/footer');
	}

	public function hapus_konfirmasi($id){
		$this->M_konfirmasi->delete($id);
		redirect('admin/konfirmasi');
	}

}
