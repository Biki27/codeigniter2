<?php 
 

defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller{

    function index(){
       $this->load->view('headerView');
		$this->load->view('careerView');
		$this->load->view('footerView');
	}
    
    



}


?>