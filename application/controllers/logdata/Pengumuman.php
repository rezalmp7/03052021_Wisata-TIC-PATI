<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

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
		if($this->session->userdata('status') != 'login' || $this->session->userdata('level') != 1)
		{
			redirect(base_url('logdata/login/logout'));
		}
		$this->load->model('M_admin');
	}
	public function index()
	{
        $data['pengumuman'] = $this->M_admin->select_select('*', 'pengumuman')->result();
		$this->load->view('logdata/layout/header');
        $this->load->view('logdata/pengumuman', $data);
        $this->load->view('logdata/layout/footer');
	}
	public function tambah()
	{
		$max_id_pengumuman = $this->M_admin->select_select('max(id) as id', 'pengumuman')->row_array();
		if($max_id_pengumuman['id'] == null)
		{
			$data['max_id_pengumuman'] = 1;
		}
		else {
			$data['max_id_pengumuman'] = $max_id_pengumuman['id']+1;
		}
		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/pengumumanTambah', $data);
		$this->load->view('logdata/layout/footer');
	}
    public function upload_pengumuman($namafile){
		$config['upload_path']          = './assets/img/pengumuman/';
		$config['allowed_types']        = 'jpg|jpeg|png|jfif';
		$config['file_name']            = $namafile;
	    $config['overwrite']			= true;
		$config['max_size']             = 100000;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar_pengumuman')){ 
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
		$id_pengumuman = $post['id'];
		$nama = $post['judul'];
		$nama_photo = str_replace(' ', '_', $nama);
		$code = uniqid();
		$date = date('Y-m-d');
		$id_photo = $post['id'];
		$namafile = $id_photo.$nama_photo.$code;
		$data = array(
			'id' => $post['id'],
			'judul' => $post['judul'],
			'isi' => $post['isi'],
			'photo' => $this->upload_pengumuman($namafile),
			'tgl_berakhir' => $post['tgl_berakhir'],
			'tgl_input' => $date
		);
		if($data['photo'] == false)
		{

			redirect(base_url('logdata/pengumuman/tambah?msg=1'));
		}
		else {
			$this->M_admin->insert_data('pengumuman', $data);
			redirect(base_url('logdata/pengumuman/info?id='.$id_pengumuman));
		}
	}
	public function info()
	{
		$get = $this->input->get();
		$where = array(
			'id' => $get['id']
		);
		$data['pengumuman'] = $this->M_admin->select_where('pengumuman', $where)->row();
		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/pengumumanInfo', $data);
		$this->load->view('logdata/layout/footer');
	}	
	public function edit()
	{
		$get = $this->input->get();
		$where = array(
			'id' => $get['id']
		);
		$data['pengumuman'] = $this->M_admin->select_where('pengumuman', $where)->row();
		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/pengumumanEdit', $data);
		$this->load->view('logdata/layout/footer');
	}
	public function edit_aksi()
	{
		$post = $this->input->post();

		$where = array(
			'id' => $post['id']
		);
		$id_pengumuman = $post['id'];

		if (empty($_FILES['gambar_pengumuman']['name'])) {
			$set = array(
				'judul' => $post['judul'],
				'photo' => $post['gambar_lama'],
				'tgl_berakhir' => $post['tgl_berakhir'],
				'isi' => $post['isi']
			);
		}
		else {
			$file_lama = $post['gambar_lama'];
			$nama_file_nama = explode(".",$file_lama);
			$namafile = $nama_file_nama[0];
			$set = array(
				'judul' => $post['judul'],
				'photo' => $this->upload_pengumuman($namafile),
				'tgl_berakhir' => $post['tgl_berakhir'],
				'isi' => $post['isi']
			);
		}

		if($set['photo'] == false)
		{
			redirect(base_url('logdata/pengumuman/edit?id='.$id_pengumuman.'?msg=1'));
		}
		else {
			$this->M_admin->update_data('pengumuman', $set, $where);
			redirect(base_url('logdata/pengumuman/info?id='.$id_pengumuman));
		}
	}
	function hapus()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);
		$cek = $this->M_admin->select_where('pengumuman', $where)->num_rows();
		$pengumuman = $this->M_admin->select_where('pengumuman', $where)->row_array();
		if($cek>0)
		{
			$photo = $pengumuman['photo'];
			unlink("./assets/img/pengumuman/$photo");
			$this->M_admin->delete_data('pengumuman', $where);
			redirect(base_url('logdata/pengumuman'));
		}
		else {
			redirect(base_url('logdata/pengumuman'));
		}
	}
}
