<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of caja
 *
 * @author Leo
 */
class Caja extends CI_Controller {
    
    function index(){
        $this->load->view('articulos/index.php'); 
    }
    
}
