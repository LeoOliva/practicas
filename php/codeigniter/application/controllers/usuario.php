<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of usuario
 *
 * @author Leo
 */
class Usuario extends CI_Controller {
    function index(){
        $this->load->view('articulos/index.php'); 
    }
    
}
