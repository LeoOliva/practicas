<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plantilla_1 extends CI_Controller  {

    function index(){
        $this->load->helper('form');
        $this->load->view('layouts/plantilla1/index.php'); 
    }
    
    
}
?>