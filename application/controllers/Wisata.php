<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

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
		$this->load->model('M_admin');
	}
	public function index()
	{

		if(isset($_GET['provinsi']))
		{
			$get = $this->input->get();
			$where = array(
				'wisata.kecamatan' => $get['provinsi']
			);
			$data['photo_wisata_20'] = $this->M_admin->select_select_where_join_2table_type_limit('photo_wisata.nama, photo_wisata.photo, photo_wisata.uploader', 'photo_wisata', 'wisata', 'photo_wisata.id_wisata = wisata.id', $where, 'left', '20')->result();
			$data['wisata'] = $this->M_admin->select_select_where_join_3table_type(
				'wisata.id, 
				wisata.nama, 
				wisata.jenis_alam, 
				wisata.jenis_budaya, 
				wisata.jenis_buatan,
				wisata.alamat,
				wisata.deskripsi,
				wisata.maps,
				wisata_sub_kategori.nama as nama_sub_kategori,
				photo_wisata.photo'
				, 'wisata', 'wisata_sub_kategori', 'wisata.sub_kategori = wisata_sub_kategori.id', 'left', 'photo_wisata', 'wisata.id = photo_wisata.id_wisata', 'left', $where
			)->result();
			$where_kecamatan = array(
				'kecamatan' => $get['provinsi']
			);
			$data['penginapan'] = $this->M_admin->select_where('penginapan', $where_kecamatan)->result();
		}
		else {
			$data['photo_wisata_20'] = $this->M_admin->select_select_limit('nama, photo, uploader', 'photo_wisata', '20')->result();
			

			$data['wisata'] = $this->M_admin->select_select_join_3table_type_groupBy(
				'wisata.id, 
				wisata.nama, 
				wisata.jenis_alam, 
				wisata.jenis_budaya, 
				wisata.jenis_buatan,
				wisata.alamat,
				wisata.deskripsi,
				wisata.maps,
				wisata_sub_kategori.nama as nama_sub_kategori,
				photo_wisata.photo'
				, 'wisata', 'wisata_sub_kategori', 'wisata.sub_kategori = wisata_sub_kategori.id', 'join', 'photo_wisata', 'wisata.id = photo_wisata.id_wisata', 'left', 'photo_wisata.id_wisata'
			)->result();
			$data['penginapan'] = $this->M_admin->select_all('penginapan')->result();
		}
		$this->load->view('layout/header');
		$this->load->view('wisata', $data);
		$this->load->view('layout/footer');
	}
	public function detail()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);
		$where_photo = array(
			'id_wisata' => $get['id']
		);

		$max_id_wisata = $this->M_admin->select_select('max(id) as id', 'photo_wisata')->row_array();
		if($max_id_wisata['id'] == null)
		{
			$data['max_id_wisata'] = 1;
		}
		else {
			$data['max_id_wisata'] = $max_id_wisata['id']+1;
		}
		$data['wisata'] = $this->M_admin->select_where('wisata', $where)->row();
		$data['photo_wisata'] = $this->M_admin->select_where('photo_wisata', $where_photo)->result();

		$this->load->view('layout/header');
		$this->load->view('wisata_detail', $data);
		$this->load->view('layout/footer');
	}
	function sarankritik_aksi()
	{
		$post = $this->input->post();

		$id_user = $this->session->userdata('id');
		$tglIni = date('Y-m-d h:m:s');


		$data = array(
			'id_user' => $id_user,
			'id_wisata' => $post['id_wisata'],
			'rating' => $post['rating'],
			'saran_kritik' => $post['sarankritik'],
			'tgl_input' => $tglIni
		);

		$this->M_admin->insert_data('sarankritik_wisata', $data);

		redirect(base_url("wisata/detail?id=".$post['id_wisata']."&msg=1"));
	}
	//PHOTO
	public function upload_photo($namafile){
		$config['upload_path']          = './assets/img/pariwisata/';
		$config['allowed_types']        = 'jpg|jpeg|png|jfif';
		$config['file_name']            = $namafile;
	    $config['overwrite']			= true;
		$config['max_size']             = 100000;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('photo')){ 
			$error = $this->upload->display_errors();
			echo $error;
			return false;
		}else{
			$data = $this->upload->data('file_name');
			return $data;
		}
	}
	function photo_aksi()
	{
		$post = $this->input->post();
		$id_user = $this->session->userdata('id');

		$nama = $post['nama_wisata'];
		$nama_photo = str_replace(' ', '_', $nama);
		$code = uniqid();
		$date = date('Y-m-d');
		$id_wisata = $post['id_wisata'];
		$id_photo = $post['id_photo'];
		$namafile = $id_wisata.$id_photo.$nama_photo.$code;

		$photo = $this->upload_photo($namafile);

		if($photo == false)
		{
			redirect(base_url('wisata/detail?id='.$id_wisata.'&msg=2'));
		}
		else {
			$data = array(
				'id' => $id_photo,
				'nama' => $post['judul'],
				'photo' => $photo,
				'uploader' => 'pengunjung',
				'id_user' => $id_user,
				'id_wisata' => $id_wisata,
				'tanggal' => $date
			);

			$this->M_admin->insert_data('photo_wisata', $data);

			redirect(base_url('wisata/detail?id='.$id_wisata.'&msg=3'));
		}
	}
}
