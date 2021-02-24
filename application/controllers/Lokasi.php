<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Lokasi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_lokasi', 'mod');	
    }
    
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $lokasi = $this->db->get('lokasi')->result();
        } else {
            $this->db->where('id', $id);
            $lokasi = $this->db->get('lokasi')->result();
        }
        $this->response($lokasi, 200);
    }   
    
    function index_post() {
        $id = $this->post('id');                
        $lokasi=$this->mod->getlokasi($id)->result();
        $this->response($lokasi, 200);
    }  
}
?>