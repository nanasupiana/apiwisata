<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_lokasidata extends CI_Model
{
	public $table = 'lokasi';

	public function __construct()
	{
		parent::__construct();
	}
	
	public function tampillokasi()
	{		
		$query = "SELECT * FROM lokasi";
		$data['result'] = $this->db->query($query)->result();
		$data['total_data'] = $this->db->count_all_results();
		return $data;
	}	

	public function detail_lokasi($id)
	{		
		$Qry = "SELECT * FROM lokasi WHERE id ='$id'";
		$data['result'] = $this->db->query($Qry)->row();
		return $data;
	}

	public function add_proses($data)
	{
		$query = $this->db->set($data)->get_compiled_insert('lokasi');
		$this->db->query($query);
	}

	public function ubah_karyawan($data)
	{
		$this->db->where("id", $this->input->post('id'));
		$query = $this->db->set($data)->get_compiled_update('lokasi');
		$this->db->query($query);
	}
	public function delete($id)
	{		
		$this->db->where('id', $id);
		$this->db->delete('lokasi');		
		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}
}
