<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of ventas
 *
 * @author Leo
 */
class Ventas extends CI_Controller  {
    function index(){
        $this->load->view('articulos/index.php'); 
    }
    
}
