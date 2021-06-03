<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$browser_name = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		$browser = $browser_name.' '.$browser_version;
		$date = date('Y-m-d');

		$data = array(
			'ip' => $ip_address,
			'browser' => $browser,
			'os' => $os,
			'tanggal' => $date
		);
		$this->M_admin->insert_data('log_pengunjung', $data);

        $data['photo_wisata_10'] = $this->M_admin->select_select_limit('nama, photo', 'photo_wisata', '10')->result();
		$data['photo_wisata_20'] = $this->M_admin->select_select_limit('nama, photo', 'photo_wisata', '20')->result();
		$tanggal_ini = date('Y-m-d');
		$where_pengumuman = "tgl_berakhir >= '$tanggal_ini'";
		$data['pengumuman'] = $this->M_admin->select_where('pengumuman', $where_pengumuman)->result();
        $data['berita'] = $this->M_admin->select_all('berita')->result();
		$this->load->view('layout/header');
        $this->load->view('home', $data);
        $this->load->view('layout/footer');
	}
	public function berita()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);
		$data['berita'] = $this->M_admin->select_where('berita', $where)->row();

		$this->load->view('layout/header');
		$this->load->view('berita_info', $data);
		$this->load->view('layout/footer');
	}
	public function pengumuman()
	{
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);
		$data['pengumuman'] = $this->M_admin->select_where('pengumuman', $where)->row();

		$this->load->view('layout/header');
		$this->load->view('pengumuman_info', $data);
		$this->load->view('layout/footer');
	}
}
