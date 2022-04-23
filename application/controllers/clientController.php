<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientController extends CI_Controller {
    function _construct(){

        $this->load->model('clientModel');
 
   }
	public function index()
	{
        $this->load->model('clientModel');
        $data['result'] = $this->clientModel->getAllData(); 
        $this->load->view('client'); 
    }
    public function showAllData(){

        $this->load->model('clientModel');
    
        $result = $this->clientModel->getAllData();
    
        echo json_encode($result);
    
      }

      public function addClient() {
        $this->load->model('clientModel');
        $this->clientModel->createData();
        redirect(base_url().'index.php/clientController');
         
     }

      public function ClientEdit() {

        $this->load->model('clientModel');
        $result = $this->clientModel->ClientEdit();
  
      echo json_encode($result);
    }

    public function UpdateClient() {

      $this->load->model('clientModel');

      $this->clientModel->UpdateData();
      redirect(base_url().'index.php/clientController');


  }

    public function delete(){
      
        $this->load->model('clientModel');
  
        $this->clientModel->deleteData();
  
      }
}