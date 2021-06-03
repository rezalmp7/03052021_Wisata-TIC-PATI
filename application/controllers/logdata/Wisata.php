<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Wisata extends CI_Controller {

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
			redirect(base_url('logdata/login/logout'));
		}
		$this->load->model('M_admin');
	}
	public function index()
	{
		$data['wisata'] = $this->M_admin->select_all('wisata')->result();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/wisata', $data);
        $this->load->view('logdata/layout/footer');
    }
    public function tambah()
    {
        $data['kategori'] = $this->M_admin->select_select('id, nama', 'wisata_kategori')->result();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/wisataTambah', $data);
        $this->load->view('logdata/layout/footer');
	}
	function get_subkategori(){
		$id = $this->input->post('id_kategori');
		
		$where = array(
			'id_kategori' => $id
		);

        $data=$this->M_admin->select_select_where('id, id_kategori, nama', 'wisata_sub_kategori', $where)->result();
        echo json_encode($data);
    }
	function tambah_aksi()
	{
		$post = $this->input->post();


		$value = array(
			'nama' => $post['nama'],
			'jenis_alam' => $post['jenis_alam'],
			'jenis_budaya' => $post['jenis_budaya'],
			'jenis_buatan' => $post['jenis_buatan'],
			'kategori' => $post['kategori'],
			'sub_kategori' => $post['sub_kategori'],
			'maps' => $post['maps'],
			'kecamatan' => $post['kecamatan'],
			'alamat' => $post['alamat'],
			'kontak' => $post['kontak'],
			'kontak_nama' => $post['nama_kontak'],
			'kontak_no' => $post['no_kontak'],
			'milik' => $post['milik'],
			'luas_dtw' => $post['luas'],
			'tenaga_kerja_l' => $post['tenaga_kerja_l'],
			'tenaga_kerja_p' => $post['tenaga_kerja_p'],
			'jarak_kota' => $post['jarak_kota'],
			'izin_usaha' => $post['izin_usaha'],
			'asuransi' => $post['asuransi'],
			'kondisi_jalan' => $post['kondisi_jalan'],
			'kantor' => $post['kantor'],
			'toilet' => $post['toilet'],
			'parkir' => $post['parkir'],
			'mushola' => $post['mushola'],
			'tic' => $post['tic'],
			'alat_kesehatan' => $post['alat_kesehatan'],
			'atm' => $post['atm'],
			'htm_weekday_d' => $post['htm_weekday_d'],
			'htm_weekday_a' => $post['htm_weekday_a'],
			'htm_weekend_d' => $post['htm_weekend_d'],
			'htm_weekend_a' => $post['htm_weekend_a'],
			'deskripsi' => $post['deskripsi'],
			'pemandangan' => $post['pemandangan']

		);
		
		$this->M_admin->insert_data('wisata', $value);

		redirect(base_url('logdata/wisata'));
		
	}
	public function info()
	{
		$get = $this->input->get();

		$select = "
			wisata.id, 
			wisata.nama as nm_wisata, 
			wisata.jenis_alam,
			wisata.jenis_budaya,
			wisata.jenis_buatan,
			wisata.maps,
			wisata.deskripsi,
			wisata.kecamatan,
			wisata.alamat,
			wisata.kontak,
			wisata.kontak_no,
			wisata.kontak_nama,
			wisata.izin_usaha,
			wisata.milik,
			wisata.luas_dtw,
			wisata.tenaga_kerja_l,
			wisata.tenaga_kerja_p,
			wisata.asuransi,
			wisata.kondisi_jalan,
			wisata.petunjuk_arah,
			wisata.jarak_kota,
			wisata.kantor,
			wisata.toilet,
			wisata.parkir,
			wisata.mushola,
			wisata.tic,
			wisata.alat_kesehatan,
			wisata.atm,
			wisata.pemandangan,
			wisata.htm_weekday_d,
			wisata.htm_weekday_a,
			wisata.htm_weekend_d,
			wisata.htm_weekend_a,
			wisata_kategori.nama as nm_kategori,
			wisata_sub_kategori.nama as nm_sub_kategori
		";

		$where = array(
			"wisata.id" => $get['id']
		);
		$where_photo = array(
			'id_wisata' => $get['id']
		);
		$data['photo_wisata'] = $this->M_admin->select_where('photo_wisata', $where_photo)->result();

		$data['wisata'] = $this->M_admin->select_select_where_join_3table_type($select, 'wisata', 'wisata_kategori', 'wisata.kategori = wisata_kategori.id', 'left', 'wisata_sub_kategori', 'wisata.sub_kategori = wisata_sub_kategori.id', 'left', $where, 'left')->row();
		
		$data['sarankritik_wisata'] = $this->M_admin->select_select_where_join_2table_type('pengunjung.nama, sarankritik_wisata.id, sarankritik_wisata.saran_kritik, sarankritik_wisata.rating, sarankritik_wisata.tgl_input', 'sarankritik_wisata', 'pengunjung', 'sarankritik_wisata.id_user = pengunjung.id', $where_photo, 'left')->result();
		$data['jumlah_sarankritik_wisata'] = $this->M_admin->select_select_where_join_2table_type('pengunjung.nama, sarankritik_wisata.id, sarankritik_wisata.saran_kritik, sarankritik_wisata.rating, sarankritik_wisata.tgl_input', 'sarankritik_wisata', 'pengunjung', 'sarankritik_wisata.id_user = pengunjung.id', $where_photo, 'left')->num_rows();

		$this->load->view('logdata/layout/header');
		$this->load->view('logdata/wisataInfo', $data);
		$this->load->view('logdata/layout/footer');
	}
	public function edit()
    {
		$get = $this->input->get();

		$where = array(
			'id' => $get['id']
		);

		$data['kategori'] = $this->M_admin->select_all("wisata_kategori")->result();
		$data['wisata'] = $this->M_admin->select_where('wisata', $where)->row();
		$data['sub_kategori'] = $this->M_admin->select_all('wisata_sub_kategori')->result();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/wisataEdit', $data);
        $this->load->view('logdata/layout/footer');
	}
	function edit_aksi()
	{
		$post = $this->input->post();


		$set = array(
			'nama' => $post['nama'],
			'jenis_alam' => $post['jenis_alam'],
			'jenis_budaya' => $post['jenis_budaya'],
			'jenis_buatan' => $post['jenis_buatan'],
			'kategori' => $post['kategori'],
			'sub_kategori' => $post['sub_kategori'],
			'maps' => $post['maps'],
			'kecamatan' => $post['kecamatan'],
			'alamat' => $post['alamat'],
			'kontak' => $post['kontak'],
			'kontak_nama' => $post['nama_kontak'],
			'kontak_no' => $post['no_kontak'],
			'milik' => $post['milik'],
			'luas_dtw' => $post['luas'],
			'tenaga_kerja_l' => $post['tenaga_kerja_l'],
			'tenaga_kerja_p' => $post['tenaga_kerja_p'],
			'jarak_kota' => $post['jarak_kota'],
			'izin_usaha' => $post['izin_usaha'],
			'asuransi' => $post['asuransi'],
			'kondisi_jalan' => $post['kondisi_jalan'],
			'kantor' => $post['kantor'],
			'toilet' => $post['toilet'],
			'parkir' => $post['parkir'],
			'mushola' => $post['mushola'],
			'tic' => $post['tic'],
			'alat_kesehatan' => $post['alat_kesehatan'],
			'atm' => $post['atm'],
			'htm_weekday_d' => $post['htm_weekday_d'],
			'htm_weekday_a' => $post['htm_weekday_a'],
			'htm_weekend_d' => $post['htm_weekend_d'],
			'htm_weekend_a' => $post['htm_weekend_a'],
			'deskripsi' => $post['deskripsi'],
			'pemandangan' => $post['pemandangan']

		);

		$where = array(
			'id' => $post['id']
		);

		$this->M_admin->update_data('wisata', $set, $where);
		
		redirect(base_url('logdata/wisata'));
	}

	//PHOTO
	public function upload_photo($namafile){
		$config['upload_path']          = './assets/img/pariwisata/';
		$config['allowed_types']        = 'jpg|jpeg|png|jfif';
		$config['file_name']            = $namafile;
	    $config['overwrite']			= true;
		$config['max_size']             = 100000;
 
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('photo_wisata')){ 
			$error = $this->upload->display_errors();
			echo $error;
			return false;
		}else{
			$data = $this->upload->data('file_name');
			return $data;
		}
	}
	public function tambah_photo()
    {
		$get = $this->input->get();
		
		$where_wisata = array(
			'id' => $get['id']
		);
		$data['data_wisata'] = $this->M_admin->select_where('wisata', $where_wisata)->row();
		$max_id_wisata = $this->M_admin->select_select('max(id) as id', 'photo_wisata')->row_array();
		if($max_id_wisata['id'] == null)
		{
			$data['max_id_wisata'] = 1;
		}
		else {
			$data['max_id_wisata'] = $max_id_wisata['id']+1;
		}
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/photoTambah', $data);
        $this->load->view('logdata/layout/footer');
	}

	function tambah_photo_aksi()
	{
		$post = $this->input->post();
		$nama = $post['wisata'];
		$nama_photo = str_replace(' ', '_', $nama);
		$code = uniqid();
		$date = date('Y-m-d');
		$id_wisata = $post['id_wisata'];
		$id_photo = $post['id_photo'];
		$namafile = $id_wisata.$id_photo.$nama_photo.$code;
		$data = array(
			'id' => $post['id_photo'],
			'nama' => $post['nama'],
			'photo' => $this->upload_photo($namafile),
			'uploader' => 'admin',
			'id_user' => $this->session->userdata('id'),
			'id_wisata' => $post['id_wisata'],
			'tanggal' => $date
		);
		if($data['photo'] == false)
		{

			redirect(base_url('logdata/wisata/tambah_photo?id='.$id_wisata.'?msg=1'));
		}
		else {
			$this->M_admin->insert_data('photo_wisata', $data);
			redirect(base_url('logdata/wisata/info?id='.$id_wisata));
		}
	}
	//END PHOTO

	function hapus()
	{
		$get = $this->input->get();
		
		$photo = 0;
		$where = array(
			'id' => $get['id']
		);
		$where_photo = array(
			'id_wisata' => $get['id']
		);
		
		$select_photo = $this->M_admin->select_where('photo_wisata', $where_photo)->result();

		if($select_photo != null)
		{
			foreach ($select_photo as $photo) {
				unlink("./assets/img/pariwisata/$photo->photo");
				$photo++;
			}
		}
		else {
			$photo = 1;
		}

		if($photo > 0)
		{
			$this->M_admin->delete_data('wisata', $where);
			$this->M_admin->delete_data('photo_wisata', $where_photo);
		}

		redirect(base_url('logdata/wisata'));
	}
	function hapus_photo()
	{
		$get = $this->input->get();
		
		$where = array(
			'id' => $get['id']
		);

		$select_photo = $this->M_admin->select_where('photo_wisata', $where)->row();
		
		if($select_photo != null)
		{
			unlink("./assets/img/pariwisata/$select_photo->photo");
			$this->M_admin->delete_data('photo_wisata', $where);
		}
		else
		{
			unlink("./assets/img/pariwisata/$select_photo->photo");
			$this->M_admin->delete_data('photo_wisata', $where);
		}


		redirect(base_url('logdata/wisata/info?id='.$select_photo->id_wisata));
	}

	function cetak()
	{
		$wisata = $this->M_admin->select_select_join_3table_type(
			'wisata.nama,
			wisata.jenis_alam,
			wisata.jenis_budaya,
			wisata.jenis_buatan,
			wisata_kategori.nama as nama_kategori,
			wisata_sub_kategori.nama as nama_sub_kategori,
			wisata.deskripsi,
			wisata.alamat,
			wisata.kontak,
			wisata.kontak_no,
			wisata.kontak_nama,
			wisata.izin_usaha,
			wisata.milik,
			wisata.luas_dtw,
			wisata.tenaga_kerja_l,
			wisata.tenaga_kerja_p,
			wisata.asuransi,
			wisata.kondisi_jalan,
			wisata.petunjuk_arah,
			wisata.jarak_kota,
			wisata.kantor,
			wisata.toilet,
			wisata.parkir,
			wisata.mushola,
			wisata.tic,
			wisata.alat_kesehatan,
			wisata.atm,
			wisata.pemandangan,
			wisata.htm_weekday_d,
			wisata.htm_weekday_a,
			wisata.htm_weekend_d,
			wisata.htm_weekend_a', 'wisata', 'wisata_kategori', 'wisata.kategori = wisata_kategori.id', 'left', 'wisata_sub_kategori', 'wisata.sub_kategori = wisata_sub_kategori.id', 'left')->result();
		
		$styleHeader = [
			'font' => [
				'bold' => true,
			],
			'alignment' => [
				'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
			]
		];
		$styleAll = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
					'color' => ['argb' => '00000000'],
				],
			],
			'alignment' => [
				'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP,
				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
			]
		];

        $spreadsheet = new Spreadsheet;
		
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:AC1');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('A2:A3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('B2:B3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('C2:E2');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('F2:F3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('G2:G3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('H2:H3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('I2:I3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('J2:J3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('K2:K3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('L2:L3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('M2:M3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('N2:O2');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('P2:P3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('Q2:Q3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('R2:R3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('S2:S3');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('T2:AA2');
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('AB2:AC2');
		$spreadsheet->getActiveSheet()->getStyle('A2:AC3')->applyFromArray($styleHeader);
		$spreadsheet->getActiveSheet()->getStyle('A1')->applyFromArray($styleHeader);

		$tahun = date('Y');
		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'Profil Daya Tarik Wisata Kabupaten Pati TH.'.$tahun)
                    ->setCellValue('A2', 'No')
                    ->setCellValue('B2', 'Nama DTW')
                    ->setCellValue('C2', 'Jenis')
                    ->setCellValue('C3', 'Alam')
                    ->setCellValue('D3', 'Budaya')
					->setCellValue('E3', 'Buatan')
					->setCellValue('F2', 'Kategori')
					->setCellValue('G2', 'Sub Kategori')
					->setCellValue('H2', 'Deskripsi')
					->setCellValue('I2', 'Alamat')
					->setCellValue('J2', 'Kontak Person')
					->setCellValue('K2', 'Ijin Usaha')
					->setCellValue('L2', 'Milik')
					->setCellValue('M2', 'Luas DTW')
					->setCellValue('N2', 'Tenaga Kerja')
					->setCellValue('N3', 'L')
					->setCellValue('O3', 'P')
					->setCellValue('P2', 'Asuransi')
					->setCellValue('Q2', 'Kondisi Jalan')
					->setCellValue('R2', 'Petunjuk Arah')
					->setCellValue('S2', 'Jarak dari Kota')
					->setCellValue('T2', 'Fasilitas')
					->setCellValue('T3', 'Kantor')
					->setCellValue('U3', 'Toilet')
					->setCellValue('V3', 'Parkir')
					->setCellValue('W3', 'Mushola')
					->setCellValue('X3', 'TIC')
					->setCellValue('Y3', 'Alat Kesehatan')
					->setCellValue('Z3', 'ATM')
					->setCellValue('AA3', 'Pemandangan')
					->setCellValue('AB2', 'HTM')
					->setCellValue('AB3', 'Hari Biasa')
					->setCellValue('AC3', 'Hari Libur')
					;

        $kolom = 4;
        $nomor = 1;
        foreach($wisata as $wisata) {
			$deskripsi = strip_tags($wisata->deskripsi);
			$deskripsi_benar = preg_replace("/&nbsp;/i", " ", $deskripsi);

            $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A' . $kolom, $nomor)
                        ->setCellValue('B' . $kolom, $wisata->nama)
                        ->setCellValue('C' . $kolom, $wisata->jenis_alam)
                        ->setCellValue('D' . $kolom, $wisata->jenis_budaya)
                        ->setCellValue('E' . $kolom, $wisata->jenis_buatan)
						->setCellValue('F' . $kolom, $wisata->nama_kategori)
						->setCellValue('G' . $kolom, $wisata->nama_sub_kategori)
						->setCellValue('H' . $kolom, $deskripsi_benar)
						->setCellValue('I' . $kolom, $wisata->alamat)
						->setCellValue('J' . $kolom, $wisata->kontak." ".$wisata->kontak_no." (".$wisata->kontak_nama.")")
						->setCellValue('K' . $kolom, $wisata->izin_usaha)
						->setCellValue('L' . $kolom, $wisata->milik)
						->setCellValue('M' . $kolom, $wisata->luas_dtw." Ha")
						->setCellValue('N' . $kolom, $wisata->tenaga_kerja_l)
						->setCellValue('O' . $kolom, $wisata->tenaga_kerja_p)
						->setCellValue('P' . $kolom, $wisata->asuransi)
						->setCellValue('Q' . $kolom, $wisata->kondisi_jalan)
						->setCellValue('R' . $kolom, $wisata->petunjuk_arah)
						->setCellValue('S' . $kolom, $wisata->jarak_kota." KM")
						->setCellValue('T' . $kolom, $wisata->kantor)
						->setCellValue('U' . $kolom, $wisata->toilet)
						->setCellValue('V' . $kolom, $wisata->parkir)
						->setCellValue('W' . $kolom, $wisata->mushola)
						->setCellValue('X' . $kolom, $wisata->tic)
						->setCellValue('Y' . $kolom, $wisata->alat_kesehatan)
						->setCellValue('Z' . $kolom, $wisata->atm)
						->setCellValue('AA' . $kolom, $wisata->pemandangan)
						->setCellValue('AB' . $kolom, "Dewasa : ".$wisata->htm_weekday_d." - Anak : ".$wisata->htm_weekday_a)
						->setCellValue('AC' . $kolom, "Dewasa : ".$wisata->htm_weekend_d." - Anak : ".$wisata->htm_weekend_a);

            $kolom++;
            $nomor++;

		}
		$kolom = $kolom-1;
		$spreadsheet->getActiveSheet()->getStyle('A2:AC'.$kolom)->applyFromArray($styleAll);
		$spreadsheet->getActiveSheet()->getStyle("A2:AC".$kolom)->getFont()->setSize(8);

        $writer = new Xlsx($spreadsheet);
		$spreadsheet->getActiveSheet()->getStyle('A2:AC'.$kolom)->getAlignment()->setWrapText(true);

		$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(15);
		$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(6);
		$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(6);
		$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(7);
		$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(8);
		$spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(30);
		$spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(10);
		$spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(10);
		$spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(8);
		$spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(7);
		$spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('P')->setWidth(7);
		$spreadsheet->getActiveSheet()->getColumnDimension('Q')->setWidth(7);
		$spreadsheet->getActiveSheet()->getColumnDimension('R')->setWidth(7);
		$spreadsheet->getActiveSheet()->getColumnDimension('S')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('T')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('U')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('V')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('W')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('X')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('AA')->setWidth(5);
		$spreadsheet->getActiveSheet()->getColumnDimension('AB')->setWidth(7);
		$spreadsheet->getActiveSheet()->getColumnDimension('AC')->setWidth(7);

        header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Latihan.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}
