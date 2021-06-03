<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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
		if($this->session->userdata('status') != 'login')
		{
			redirect(base_url('logdata/login'));
		}
		$this->load->model('M_admin');
	}
	public function index()
	{
		$data['berita'] = $this->M_admin->select_select_join_2table_type('berita.id, berita.judul, user.nama, berita.tanggal', 'berita', 'user', 'berita.id_user=user.id', 'left')->result();
		$this->load->view('logdata/layout/header');
        $this->load->view('logdata/berita', $data);
        $this->load->view('logdata/layout/footer');
    }
    public function tambah()
    {
		$max_id_berita = $this->M_admin->select_select('max(id) as id', 'berita')->row_array();
		if($max_id_berita['id'] == null)
		{
			$data['max_id_berita'] = 1;
		}
		else {
			$data['max_id_berita'] = $max_id_berita['id']+1;
		}
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/beritaTambah', $data);
        $this->load->view('logdata/layout/footer');
    }
    public function upload_photo($namafile){
		$config['upload_path']          = './assets/img/berita/';
		$config['allowed_types']        = 'jpg|jpeg|png|jfif';
		$config['file_name']            = $namafile;
	    $config['overwrite']			= true;
		$config['max_size']             = 100000;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar_berita')){ 
			$error = $this->upload->display_errors();
			echo $error;
			return false;
		}else{
			$data = $this->upload->data('file_name');
			return $data;
		}
    }
    public function tambah_aksi()
    {
		$post = $this->input->post();
		$id_berita = $post['id'];
		$nama = $post['judul'];
		$nama_photo = str_replace(' ', '_', $nama);
		$code = uniqid();
		$date = date('Y-m-d');
		$id_photo = $post['id'];
		$namafile = $id_photo.$nama_photo.$code;
		$data = array(
			'id' => $post['id'],
			'judul' => $post['judul'],
			'gambar' => $this->upload_photo($namafile),
			'id_user' => $this->session->userdata('id'),
			'isi' => $post['isi'],
			'tanggal' => $date
		);
		if($data['gambar'] == false)
		{

			redirect(base_url('logdata/berita/tambah?id='.$id_berita.'?msg=1'));
		}
		else {
			$this->M_admin->insert_data('berita', $data);
			redirect(base_url('logdata/berita/info?id='.$id_berita));
		}
	}
	public function info()
	{
		$get = $this->input->get();

		$where = array(
			'berita.id' => $get['id']
		);
		$data['berita'] = $this->M_admin->select_select_where_join_2table_type('berita.id, berita.judul, user.nama, berita.tanggal, berita.isi, berita.gambar', 'berita', 'user', 'berita.id_user=user.id', $where, 'left')->row();
		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/beritaInfo', $data);
		$this->load->view('logdata/layout/footer');
	}
	public function edit()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);
		$data['berita'] = $this->M_admin->select_where('berita', $where)->row();

		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/beritaEdit', $data);
		$this->load->view('logdata/layout/footer');
	}
	public function edit_aksi()
	{
		$post = $this->input->post();

		$where = array(
			'id' => $post['id']
		);
		$id_berita = $post['id'];

		if (empty($_FILES['gambar_berita']['name'])) {
			$set = array(
				'judul' => $post['judul'],
				'gambar' => $post['gambar_berita_lama'],
				'isi' => $post['isi']
			);
		}
		else {
			$file_lama = $post['gambar_berita_lama'];
			$nama_file_nama = explode(".",$file_lama);
			$namafile = $nama_file_nama[0];
			$set = array(
				'judul' => $post['judul'],
				'gambar' => $this->upload_photo($namafile),
				'isi' => $post['isi'],
			);
		}

		if($set['gambar'] == false)
		{
			redirect(base_url('logdata/berita/edit?id='.$id_berita.'?msg=1'));
		}
		else {
			$this->M_admin->update_data('berita', $set, $where);
			redirect(base_url('logdata/berita/info?id='.$id_berita));
		}
	}
	function hapus()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);
		$cek = $this->M_admin->select_where('berita', $where)->num_rows();
		$berita = $this->M_admin->select_where('berita', $where)->row_array();
		if($cek>0)
		{
			$gambar = $berita['gambar'];
			unlink("./assets/img/berita/$gambar");
			$this->M_admin->delete_data('berita', $where);
			redirect(base_url('logdata/berita'));
		}
		else {
			redirect(base_url('logdata/berita'));
		}
	}
}
