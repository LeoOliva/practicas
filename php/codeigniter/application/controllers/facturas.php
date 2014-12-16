<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of facturas
 *
 * @author Leo
 */
class Facturas extends CI_Controller  {
    function index(){
        $this->load->view('facturas/index.php'); 
    }
    
}
