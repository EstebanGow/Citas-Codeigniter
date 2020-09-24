<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewCita extends CI_Controller {

	
	public function index()
	{   
        $cites = $this->CitaModel->list();
        $listCites = array('cites' => $cites);
        $this->load->view('layouts/header');
        $this->load->view('viewCita',$listCites);
        $this->load->view('layouts/footer');
    }
    
}