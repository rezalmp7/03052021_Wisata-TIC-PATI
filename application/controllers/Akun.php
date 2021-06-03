<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

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
        $id_user = $this->session->userdata('id');

        $where = array(
            'id' => $id_user
        );
        $where_photo = array(
			'id_user' => $id_user,
			'uploader' => 'pengunjung'
        );

        $data['user'] = $this->M_admin->select_where('pengunjung', $where)->row();
        $data['photo'] = $this->M_admin->select_where('photo_wisata', $where_photo)->result();

		$this->load->view('layout/header');
		$this->load->view('akun', $data);
		$this->load->view('layout/footer');
	}
	public function edit()
	{
		$id_user = $this->session->userdata('id');
		
		$where = array(
			'id' => $id_user
		);

		$data['user'] = $this->M_admin->select_where('pengunjung', $where)->row();

		$this->load->view('layout/header');
		$this->load->view('akun_edit.php', $data);
		$this->load->view('layout/footer');
	}
	function edit_aksi()
	{
		$id_user = $this->session->userdata('id');
		$post = $this->input->post();
		
		if($post['password'] == null)
		{
			$password = $post['password_lama'];
		}
		else {
			$password = md5($post['password']);
		}

		$where = array(
			'id' => $id_user
		);

		$set = array(
			'nama' => $post['nama'],
        	'username' => $post['username'],
        	'password' => $password,
        	'no_hp' => $post['no_handphone'],
        	'email' => $post['email'],
        	'alamat' => $post['alamat'],
        	'tempat_lahir' => $post['tempat_lahir'],
        	'tanggal_lahir' => $post['tgl_lahir'],
        	'jenis_kelamin' => $post['jenkel']
		);

		$this->M_admin->update_data('pengunjung', $set, $where);

		redirect(base_url('akun'));
	}
}
