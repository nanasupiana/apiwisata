<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lokasidata extends CI_Controller
{

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
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_lokasidata', 'mod');
	}

	public function index()
	{
		$data['result'] = $this->mod->tampillokasi()['result'];
		$this->parser->parse('lokasi/lokasidata', $data);
	}
	public function add()
	{
		$data['title'] = 'Tambah Lokasi';
		$this->parser->parse('lokasi/lokasiadd', $data);
	}

	public function add_proses()
	{
		$data = [
			"nama"	=> $this->input->post('nama'),
			"alamat"	=> $this->input->post('alamat'),
			"provinsi"	=> $this->input->post('provinsi'),
			"kota"	=> $this->input->post('kota'),
			"kecamatan"	=> $this->input->post('kecamatan'),
			"desa"	=> $this->input->post('desa'),
			"informasi"	=> $this->input->post('informasi')
		];
		$this->mod->add_proses($data);
		redirect(site_url('lokasidata'));
	}
	
	public function detail($id)
	{
		$data['title'] = 'Ubah Lokasi';
		$data['result'] = $this->mod->detail_lokasi($id);	
		$data['id'] = $id;			
		$this->parser->parse('lokasi/lokasidetail', $data);
	}

	public function add_detail()
	{
		$data = [
			"id"	=> $this->input->post('id'),
			"foto"	=> $this->input->post('urlimagebase64'),
		];
		$this->mod->add_detail_proses($data);
		redirect(site_url('lokasidata'));
	}
}
