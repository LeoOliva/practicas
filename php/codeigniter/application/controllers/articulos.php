<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos extends CI_Controller  {

    function index(){
        $this->load->helper('form');
        $this->load->view('articulos/index.php'); 
    }
    
    
}
?>