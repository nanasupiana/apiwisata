<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_lokasi extends CI_Model
{
	public $table = 'lokasi';

	public function __construct()
	{
		parent::__construct();
	}
	
	public function getlokasi($id)
	{		
		$query = "SELECT
		lokasi.id,
		lokasi.nama,
		lokasi_foto.foto 
	FROM
		lokasi
		INNER JOIN lokasi_foto ON lokasi.id = lokasi_foto.id 
	WHERE
		lokasi.id = '$id'";
		$data = $this->db->query($query);		
		return $data;
	}		
}
