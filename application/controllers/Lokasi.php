<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Lokasi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('lokasi')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('lokasi')->result();
        }
        $this->response($kontak, 200);
    }    
}
?>