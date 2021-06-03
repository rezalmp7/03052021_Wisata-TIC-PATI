<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data['user'] = $this->M_admin->select_select_join_2table_type('user.id, user.nama, user.username, user.email, user.level, wisata.nama as nm_wisata', 'user', 'wisata', 'user.id_wisata = wisata.id', 'left')->result();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/user', $data);
        $this->load->view('logdata/layout/footer');
    }
    public function tambah()
    {
		$data['wisata'] = $this->M_admin->select_select('id, nama', 'wisata')->result();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/userTambah', $data);
        $this->load->view('logdata/layout/footer');
	}
	function tambah_aksi()
	{
		$post = $this->input->post();

		$password = md5($post['password']);

		$value = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => $password,
			'email' => $post['email'],
			'no_hp' => $post['no_telephone'],
			'level' => $post['level'],
			'id_wisata' => $post['wisata']
		);

		if($this->M_admin->insert_data('user', $value))
		{
			redirect(base_url('logdata/user'));
		}
		else {
			redirect(base_url('logdata/user?msg=1'));
		}
	}
	public function info()
	{
		$get = $this->input->get();

		$where = array(
			"user.id" => $get['id']
		);

		$data['user'] = $this->M_admin->select_select_where_join_2table_type('user.nama, user.username, user.email, user.alamat, user.no_hp, user.level, wisata.nama as nm_wisata', 'user', 'wisata', 'user.id_wisata = wisata.id', $where, 'left')->row();

		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/userInfo', $data);
		$this->load->view('logdata/layout/footer');
	}
	public function edit()
    {
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);

		$data['user'] = $this->M_admin->select_where('user', $where)->row();
		$data['wisata'] = $this->M_admin->select_select('id, nama', 'wisata')->result();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/userEdit', $data);
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
		
		if($post['level'] == '1')
		{
			$wisata = null;
		}
		else {
			$wisata = $post['wisata'];
		}

		$where = array(
			'id' => $post['id']
		);

		$set = array(
			'nama' => $post['nama'],
			'username' => $post['username'],
			'password' => $password,
			'email' => $post['email'],
			'no_hp' => $post['no_telephone'],
			'level' => $post['level'],
			'id_wisata' => $wisata
		);

		$this->M_admin->update_data('user', $set, $where);
		
		redirect(base_url('logdata/user'));
	}
	function hapus()
	{
		$get = $this->input->get();
		
		$where = array(
			'id' => $get['id']
		);

		$this->M_admin->delete_data('user', $where);

		redirect(base_url('logdata/user'));
	}
}
