<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Mlcontent Products model example
*
* @author Salvatore Guarino
* @link http://www.salgua.com
* @copyright Salvatore Guarino 2013
*
*/
class Products_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function save($data)
	{
		return $this->db->insert('products', $data);
	}
	
	public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}
}