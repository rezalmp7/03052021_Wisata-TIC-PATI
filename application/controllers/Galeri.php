<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

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
		$data['photo'] = $this->M_admin->select_select_join_2table_type('photo_wisata.id, photo_wisata.nama, photo_wisata.photo, photo_wisata.id_wisata, wisata.nama as nama_wisata, wisata.jenis_alam, wisata.jenis_budaya, wisata.jenis_buatan', 'photo_wisata', 'wisata', 'photo_wisata.id_wisata = wisata.id', 'left')->result();
		$this->load->view('layout/header');
		$this->load->view('galeri', $data);
		$this->load->view('layout/footer');
	}
}
