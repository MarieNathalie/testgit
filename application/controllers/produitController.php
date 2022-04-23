<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produitController extends CI_Controller {
    function _construct(){

        $this->load->model('produitModel');
 
   }
	public function index()
	{
        $this->load->model('produitModel');
        $data['result'] = $this->produitModel->getAllData(); 
        $this->load->view('produit',$data); 
    }
    public function showAllData(){

        $this->load->model('produitModel');
    
        $result = $this->produitModel->getAllData();
    
        echo json_encode($result);
    
      }

      public function addProduit() {
        $this->load->model('produitModel');
        $this->produitModel->createData();
        redirect(base_url().'index.php/produitController');
         
     }

      public function ProduitEdit() {

        $this->load->model('produitModel');
        $result = $this->produitModel->ProduitEdit();
  
      echo json_encode($result);
    }

    public function UpdateProduit() {

      $this->load->model('produitModel');

      $this->produitModel->UpdateData();
     redirect(base_url().'index.php/produitController');

  }

  public function UpdateStock(){
    $this->load->model('produitModel');

      $this->produitModel->UpdateStock();
  }

    public function delete(){
      
        $this->load->model('produitModel');
  
        $this->produitModel->deleteData();
  
      }
}
