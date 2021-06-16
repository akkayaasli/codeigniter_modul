<?php
 class Crud_model extends CI_Model{
 	public function getAllProducts(){
 		$query=$this->db->get('products');
 		if($query){
 			return $query->result();
 		}

 	}
 	//****INSERT
 	public function insertProduct($data){
 		$this->db->insert('products',$data);

 		if($query){
 			return true;
 		}
 		else
 		{
 			return false;
 		}
 	}
 	//***INSERT

 	
 	//update---
 	public function getSingleProduct($id){
 		$this->db->where('id',$id);

 		$query=$this->db->get('products');

 		if($query){
 			return $query->row();
 		}
 	}
 	public function updateProduct($data,$id){
 		$this->db->where('id',$id);
 		$query=$this->db->update('products',$data);

 		if($query){
 			return true;

 		}
 		else
 		{
 			return false;
 		}
 	}
 	//---update


 	//delete--
 	public function deleteItem($id){
 		$this->db->where('id',$id);
 		$query=$this->db->delete('products');

 		if($query){
 			return true;
 		}
 		else
 		{
 			return false;
 		}
 	}
 	//--delete
 }
?>