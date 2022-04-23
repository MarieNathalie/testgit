<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class clientModel extends CI_Model{

	public function _construct() {
 
		$this->load->database();

	}

    function createData(){

		$data = array(
			
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'cin' => $this->input->post('cin'),
            'sexe' => $this->input->post('sexe'),
            'adresse' => $this->input->post('adresse'),
            'tel' => $this->input->post('tel')
);

	$this->db->insert('client',$data);

 
	}

	function getAllData(){

	$query= $this->db->query('SELECT * FROM client order by id');

		return $query->result();
		
    }
    
    public function ClientEdit() {

        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $query = $this->db->get('client');
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
            'nom' => $this->input->post('nom1'),
            'prenom' => $this->input->post('prenom1'),
            'cin' => $this->input->post('cin1'),
            'sexe' => $this->input->post('sexe1'),
            'adresse' => $this->input->post('adresse1'),
            'tel' => $this->input->post('tel1')
        );
        $this->db->where('id',$id);
        $this->db->update('client',$data);
    }

    public function deleteData() {
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('client');
    }


} 

?>