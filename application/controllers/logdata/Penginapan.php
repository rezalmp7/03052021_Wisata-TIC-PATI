<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Penginapan extends CI_Controller {

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
		$data['penginapan'] = $this->M_admin->select_all('penginapan')->result();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/penginapan', $data);
        $this->load->view('logdata/layout/footer');
    }
    public function tambah()
    {
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/penginapanTambah');
        $this->load->view('logdata/layout/footer');
    }
    
    public function tambah_aksi()
    {
        $post = $this->input->post();
        $tgl_ini = date('Y-m-d');
        
        $data = array(
            'nama' => $post['nama'],
            'bintang' => $post['bintang'],
            'kecamatan' => $post['kecamatan'],
            'alamat' => $post['alamat'],
            'telepon' => $post['telepon'],
            'tanggal' => $tgl_ini
        );

        $this->M_admin->insert_data('penginapan', $data);
        redirect(base_url('logdata/penginapan'));
    }
    public function edit()
    {
        $get = $this->input->get();

        $where = array(
            'id' => $get['id']
        );

        $data['penginapan'] = $this->M_admin->select_where('penginapan', $where)->row();
        $this->load->view('logdata/layout/header');
        $this->load->view('logdata/penginapanEdit', $data);
        $this->load->view('logdata/layout/footer');
    }
    public function edit_aksi()
    {
        $post = $this->input->post();

        $where = array(
            'id' => $post['id']
        );
        $set = array(
            'nama' => $post['nama'],
            'bintang' => $post['bintang'],
            'kecamatan' => $post['kecamatan'],
            'alamat' => $post['alamat'],
            'telepon' => $post['telepon']
        );

        $this->M_admin->update_data('penginapan', $set, $where);

        redirect(base_url('logdata/penginapan'));
    }
    function hapus()
    {
        $get = $this->input->get();

        $where = array(
            'id' => $get['id']
        );

        $this->M_admin->delete_data('penginapan', $where);
        
        redirect(base_url('logdata/penginapan'));
    }
    
	function cetak()
	{
		$penginapan = $this->M_admin->select_all('penginapan')->result();
		
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
		
		$spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:E1');
		$spreadsheet->getActiveSheet()->getStyle('A2:E2')->applyFromArray($styleHeader);
		$spreadsheet->getActiveSheet()->getStyle('A1')->applyFromArray($styleHeader);

		$tahun = date('Y');
		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'Penginapan Pada Thn.'.$tahun)
                    ->setCellValue('A2', 'No')
                    ->setCellValue('B2', 'Nama Wisata')
                    ->setCellValue('C2', 'bintang')
                    ->setCellValue('D2', 'alamat')
                    ->setCellValue('E2', 'telepon')
					;

        $kolom = 3;
        $nomor = 1;
        foreach($penginapan as $penginapan) {

            $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A' . $kolom, $nomor)
                        ->setCellValue('B' . $kolom, $penginapan->nama)
                        ->setCellValue('C' . $kolom, $penginapan->bintang)
                        ->setCellValue('D' . $kolom, $penginapan->alamat)
                        ->setCellValue('E' . $kolom, $penginapan->telepon);

            $kolom++;
            $nomor++;

		}
		$kolom = $kolom-1;
		$spreadsheet->getActiveSheet()->getStyle('A2:E'.$kolom)->applyFromArray($styleAll);
		$spreadsheet->getActiveSheet()->getStyle("A2:E".$kolom)->getFont()->setSize(12);

        $writer = new Xlsx($spreadsheet);
		$spreadsheet->getActiveSheet()->getStyle('A2:AC'.$kolom)->getAlignment()->setWrapText(true);

		$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

        header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Latihan.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
}
?>