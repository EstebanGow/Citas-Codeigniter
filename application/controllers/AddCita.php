<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCita extends CI_Controller {

	
	public function index()
	{
        $this->load->view('layouts/header');
        $this->load->view('addCita');
        $this->load->view('layouts/footer');
    }
    

      public function create(){
        if($this->input->post('firstname') == null){
            echo "error";
        }
        else{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $city = $_POST['city'];
            $motive = $_POST['motive'];
            $datenac = $_POST['datenac'];
            $datecite = $_POST['datecite'];
            $ident = $_POST['ident'];
            $direction = $_POST['direction'];
            $phone = $_POST['phone'];
            
            $citeData = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'ident' => $ident,
                'datenac' => $datenac,
                'city' => $city,
                'direction' => $direction,
                'phone' => $phone,
                'datecite' => $datecite,
                'motive' => $motive
            );
            $this->CitaModel->create($citeData);
            $redirect = base_url() . "/ViewCita";
            header("location: $redirect");
        }
    }
	
}