<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kategori extends CI_Controller {

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
		$data['sub_kategori'] = $this->M_admin->select_select_join_2table_type('wisata_sub_kategori.id, wisata_sub_kategori.nama, wisata_kategori.nama as nama_kategori', 'wisata_sub_kategori', 'wisata_kategori', 'wisata_sub_kategori.id_kategori = wisata_kategori.id', 'left')->result();
		$this->load->view('logdata/layout/header');
        $this->load->view('logdata/sub_kategori', $data);
        $this->load->view('logdata/layout/footer');
	}
	public function tambah()
	{
        $data['kategori'] = $this->M_admin->select_select('id, nama', 'wisata_kategori')->result();
		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/sub_kategoriTambah', $data);
		$this->load->view('logdata/layout/footer');
	}
	function tambah_aksi()
	{
		$post = $this->input->post();

		$value = array(
            'id_kategori' => $post['kategori'],
			'nama' => $post['nama']
		);

		$this->M_admin->insert_data('wisata_sub_kategori', $value);

		redirect(base_url('logdata/sub_kategori'));
	}
	public function edit()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		); 

        $data['kategori'] = $this->M_admin->select_select('id, nama', 'wisata_kategori')->result();
		$data['sub_kategori'] = $this->M_admin->select_where('wisata_sub_kategori', $where)->row();

		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/sub_kategoriEdit', $data);
		$this->load->view('logdata/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();

		$where = array(
			'id' => $post['id']
		);

		$set = array(
			'id_kategori' => $post['kategori'],
			'nama' => $post['nama']
		);

		$this->M_admin->update_data('wisata_sub_kategori', $set, $where);

		redirect(base_url('logdata/sub_kategori'));
	}
	function hapus()
	{
		$get = $this->input->get();
		
		$where = array(
			'id' => $get['id']
		);

		$this->M_admin->delete_data('wisata_sub_kategori', $where);

		redirect(base_url('logdata/sub_kategori'));
	}
}
