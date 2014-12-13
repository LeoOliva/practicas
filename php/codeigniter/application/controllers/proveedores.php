<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of proveedores
 *
 * @author Leo
 */
class Proveedores  extends CI_Controller {
    function index(){
        $this->load->view('articulos/index.php'); 
    }
    
}
