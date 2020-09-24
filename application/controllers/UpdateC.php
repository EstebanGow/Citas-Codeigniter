<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateC extends CI_Controller {

  
      public function index(){   
            $id = $_GET['id'];
            $cites = $this->CitaModel->cite($id);
            $listCites = array('cites' => $cites);
            $this->load->view('layouts/header');
            $this->load->view('updateCita',$listCites);
            $this->load->view('layouts/footer');
        }
        

          public function update(){
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
              $id = $_POST['id'];
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
              $this->CitaModel->update($id, $citeData);
              $redirect = base_url() . "/ViewCita";
              header("location: $redirect");
          }
        }
    
}