<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class produitModel extends CI_Model{

	public function _construct() {
 
		$this->load->database();

	}

    function createData(){

		$data = array(
			
            'code' => $this->input->post('code'),
            'nom' => $this->input->post('nom'),
            'prix' => $this->input->post('prix'),
            'stock' => $this->input->post('stock')
           
            
            
);

	$this->db->insert('produit',$data);

 
	}

	function getAllData(){

	$query= $this->db->query('SELECT * FROM produit order by id');

		return $query->result();
		
    }
    
    public function ProduitEdit() {

        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $query = $this->db->get('produit');
        if ($query->num_rows() > 0) {
            return $query->row();
        }else{
            return false;
        }
    }

    public function UpdateData(){

        $id = $this->input->post('id1');
        $data = array(   
            'id' => $id, 
            'code' => $this->input->post('code1'),
            'nom' => $this->input->post('nom1'),
            'prix' => $this->input->post('prix1'),
            'stock' => $this->input->post('stock1')
            
        );
        $this->db->where('id',$id);
        $this->db->update('produit',$data);
    }
    public function UpdateStock(){
        $id = $this->input->post('id1');
        $data = array(   
            'id' => $id, 
            'code' => $this->input->post('data-code'),
            'nom' => $this->input->post('data-nom'),
            'prix' => $this->input->post('data-prix'),
            'stock' => $this->input->post('tot')
            
        );
        $this->db->where('id',$id);
        $this->db->update('produit',$data);

    }

    public function deleteData() {
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('produit');
    }


} 

?>