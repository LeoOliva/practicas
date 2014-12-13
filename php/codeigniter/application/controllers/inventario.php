<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of inventario
 *
 * @author Leo
 */
class Inventario extends CI_Controller {
    function index(){
        $this->load->view('articulos/index.php'); 
    }
    
}
