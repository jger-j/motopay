 <?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

/**
 * Description of User
 *
 * @author End 
 */
class User extends CI_Controller{   
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function signin(){
        $this->form_validation->set_rules('username','Username', 'require');
        $this->form_validation->set_rules('password','Password', 'require');
        if($this->form_validation->run()==FALSE){
            $this->load->view('signin');
        } else {
            redirect('');
        }
        
    }
    
}
