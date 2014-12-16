<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of clientes
 *
 * @author Leo
 */
class Clientes extends CI_Controller  {
    function index(){
        $this->load->view('clientes/index.php'); 
    }
    
}
