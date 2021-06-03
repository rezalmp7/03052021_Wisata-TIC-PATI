<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

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
		$data['pengunjung'] = $this->M_admin->select_select('id, nama, username, no_hp, alamat', 'pengunjung')->result();
		$this->load->view('logdata/layout/header');
        $this->load->view('logdata/pengunjung', $data);
        $this->load->view('logdata/layout/footer');
	}
	public function tambah()
	{
		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/pengunjungTambah');
		$this->load->view('logdata/layout/footer');
	}
	function tambah_aksi()
	{
		$post = $this->input->post();

		$dateNow = date("Y-m-d");

		$password = md5($post['password']);

		$value = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => $password,
			'no_hp' => $post['no_telephone'],
			'alamat' => $post['alamat'],
			'tempat_lahir' => $post['tempat_lahir'],
			'tanggal_lahir' => $post['tanggal_lahir'],
			'jenis_kelamin' => $post['jenis_kelamin'],
			'tgl_register' => $dateNow
		);

		$this->M_admin->insert_data('pengunjung', $value);

		redirect(base_url('pengunjung'));
	}
    public function info()
    {
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);

		$data['pengunjung'] = $this->M_admin->select_select_where('id, nama, username, no_hp, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, tgl_register', 'pengunjung', $where)->row();

        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/pengunjungInfo', $data);
        $this->load->view('logdata/layout/footer');
	}
	public function edit()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);

		$data['pengunjung'] = $this->M_admin->select_where('pengunjung', $where)->row();

		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/pengunjungEdit', $data);
		$this->load->view('logdata/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();

		if($post['password'] == null)
		{
			$password = $post['password_lama'];
		}
		else {
			$password = md5($post['password']);
		}

		$where = array(
			'id' => $post['id']
		);

		$set = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => $password,
			'no_hp' => $post['no_telephone'],
			'alamat' => $post['alamat'],
			'tempat_lahir' => $post['tempat_lahir'],
			'tanggal_lahir' => $post['tanggal_lahir'],
			'jenis_kelamin' => $post['jenis_kelamin']
		);

		$this->M_admin->update_data('pengunjung', $set, $where);

		redirect(base_url('logdata/pengunjung'));
	}
	function hapus()
	{
		$get = $this->input->get();
		
		$where = array(
			'id' => $get['id']
		);

		$this->M_admin->delete_data('pengunjung', $where);

		redirect(base_url('logdata/pengunjung'));
	}
}
