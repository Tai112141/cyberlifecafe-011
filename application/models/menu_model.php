<?php defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model {

		function __construct(){
            parent::__construct();
        }
        
		function getAllMenus($sid){
			$this->db->select('menu_id, menu_name, mcategory_id,mshop_id');
			//$result = $this->db->get('shop');
			$result = $this->db->get_where('menu', array('shop_province' => $sid));
			return $result;
		}

 		// function _queryUsers(){
		// 	$query = $this->db->query("select * from users where id='3'");
 		// 	return $query;
         // }	
         
		function menu_insert($data){
			$this->db->insert('menu',$data);
        }
		
		function getShow(){
			$result['data'] = $this->db->get('menu');
			//$result = $this->db->get('shop');
			return $result;
		}
		// function _delete_user_id($id){
		// 	$this->db->where('id', $id);
		// 	$this->db->delete('users');  
		// }	
}
