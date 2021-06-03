<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('M_login');
	}
	public function index()
	{
		$this->load->view('layout/header');
        $this->load->view('login');
        $this->load->view('layout/footer');
    }
    function daftar_aksi()
    {
        $post = $this->input->post();

        $where_cek_username = array(
            'username' => $post['username']
        );
        $cek_username = $this->M_admin->select_select_where('id, username', 'pengunjung', $where_cek_username)->num_rows();
        if($cek_username<=0)
        {
            $tglIni = date('Y-m-d');
            $password = md5($post['password']);
            $data = array(
                'nama' => $post['nama'],
                'username' => $post['username'],
                'password' => $password,
                'no_hp' => $post['no_handphone'],
                'email' => $post['email'],
                'alamat' => $post['alamat'],
                'tempat_lahir' => $post['tempat_lahir'],
                'tanggal_lahir' => $post['tgl_lahir'],
                'jenis_kelamin' => $post['jenkel'],
                'tgl_register' => $tglIni
            );

            $this->M_admin->insert_data('pengunjung', $data);
            redirect(base_url());
        }
        else {
            redirect(base_url('login?msg=2'));
        }
    }
    function login_aksi()
    {
        $post = $this->input->post();

        $username = $post["username"];
		$pass = $post["password"];
		if($username=="" || $pass=="")
		{
			redirect(base_url("login?ps=1"));
		}
		else
		{
			$md_pass = md5($pass);

			$where = array(
				'username' => $username,
				'password' => $md_pass
			);

			$cek_login = $this->M_login->cek_login('pengunjung', $where);
			$data_user = $this->M_login->select_where('pengunjung', $where)->result_array();

			if($cek_login)
			{
				foreach($data_user as $a)
				{
					$id_user = $a['id'];
					$nama = $a['nama'];
				}
				$data_session = array(
					'status' => "login_client_ticpati",
					'nama' => $nama,
					'id' => $id_user
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('home'));
			}
			else
			{
				redirect(base_url("login?ps=2"));
			}
		}
    }
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
