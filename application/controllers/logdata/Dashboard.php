<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['jumlah_pariwisata'] = $this->M_admin->select_select('nama', 'wisata')->num_rows();
		$data['jumlah_penginapan'] = $this->M_admin->select_select('nama', 'penginapan')->num_rows();
		$data['jumlah_rating'] = $this->M_admin->select_select('sum(rating) as rating','sarankritik_wisata')->row();
		$data['jumlah_data_rating'] = $this->M_admin->select_all('sarankritik_wisata')->num_rows();
		
		$tahun_0 = date('Y');
		$tahun_1 = date('Y', strtotime("-1 year"));
		$tahun_2 = date('Y', strtotime("-2 year"));
		$tahun_3 = date('Y', strtotime("-3 year"));
		$tahun_4 = date('Y', strtotime("-4 year"));

		$data['tahun_0'] = $tahun_0;
		$data['tahun_1'] = $tahun_1;
		$data['tahun_2'] = $tahun_2;
		$data['tahun_3'] = $tahun_3;
		$data['tahun_4'] = $tahun_4;

		$where_os_pc_0 = "YEAR(tanggal) = '$tahun_0' AND os LIKE 'windows%' OR os LIKE 'mac%'";
		$where_os_pc_1 = "YEAR(tanggal) = '$tahun_1' AND os LIKE 'windows%' OR os LIKE 'mac%'";
		$where_os_pc_2 = "YEAR(tanggal) = '$tahun_2' AND os LIKE 'windows%' OR os LIKE 'mac%'";
		$where_os_pc_3 = "YEAR(tanggal) = '$tahun_3' AND os LIKE 'windows%' OR os LIKE 'mac%'";
		$where_os_pc_4 = "YEAR(tanggal) = '$tahun_4' AND os LIKE 'windows%' OR os LIKE 'mac%'";
		
		$where_os_hp_0 = "YEAR(tanggal) = '$tahun_0' AND os LIKE 'android%' OR os LIKE 'ios%'";
		$where_os_hp_1 = "YEAR(tanggal) = '$tahun_1' AND os LIKE 'android%' OR os LIKE 'ios%'";
		$where_os_hp_2 = "YEAR(tanggal) = '$tahun_2' AND os LIKE 'android%' OR os LIKE 'ios%'";
		$where_os_hp_3 = "YEAR(tanggal) = '$tahun_3' AND os LIKE 'android%' OR os LIKE 'ios%'";
		$where_os_hp_4 = "YEAR(tanggal) = '$tahun_4' AND os LIKE 'android%' OR os LIKE 'ios%'";

		$data['os_pc_0'] = $this->M_admin->select_where('log_pengunjung', $where_os_pc_0)->num_rows();
		$data['os_pc_1'] = $this->M_admin->select_where('log_pengunjung', $where_os_pc_1)->num_rows();
		$data['os_pc_2'] = $this->M_admin->select_where('log_pengunjung', $where_os_pc_2)->num_rows();
		$data['os_pc_3'] = $this->M_admin->select_where('log_pengunjung', $where_os_pc_3)->num_rows();
		$data['os_pc_4'] = $this->M_admin->select_where('log_pengunjung', $where_os_pc_4)->num_rows();
		
		$data['os_hp_0'] = $this->M_admin->select_where('log_pengunjung', $where_os_hp_0)->num_rows();
		$data['os_hp_1'] = $this->M_admin->select_where('log_pengunjung', $where_os_hp_1)->num_rows();
		$data['os_hp_2'] = $this->M_admin->select_where('log_pengunjung', $where_os_hp_2)->num_rows();
		$data['os_hp_3'] = $this->M_admin->select_where('log_pengunjung', $where_os_hp_3)->num_rows();
		$data['os_hp_4'] = $this->M_admin->select_where('log_pengunjung', $where_os_hp_4)->num_rows();

		$where_jumlah_alam = array(
			'jenis_alam' => 'alam'
		);
		$data['jumlah_pariwisata_alam'] = $this->M_admin->select_select_where('nama', 'wisata', $where_jumlah_alam)->num_rows();
		$where_jumlah_budaya = array(
			'jenis_budaya' => 'budaya'
		);
		$data['jumlah_pariwisata_budaya'] = $this->M_admin->select_select_where('nama', 'wisata', $where_jumlah_budaya)->num_rows();
		$where_jumlah_buatan = array(
			'jenis_buatan' => 'buatan'
		);
		$data['jumlah_pariwisata_buatan'] = $this->M_admin->select_select_where('nama', 'wisata', $where_jumlah_buatan)->num_rows();
		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/dashboard', $data);
	}
}
