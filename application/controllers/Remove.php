<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Remove extends CI_Controller {

	
	public function index()
	{
        $this->load->view('layouts/header');
        $this->load->view('addCita');
        $this->load->view('layouts/footer');
    }
    

      public function delete(){
        if($this->input->get('id') == null){
            echo "error";
        }
        else{
            $ide = $_GET['id'];
            $id = array(
                    'id'=>$ide
            );
            $this->CitaModel->delete($id);
            $redirect = base_url()."/ViewCita";
            header("location: $redirect");
        }
    }
	
}