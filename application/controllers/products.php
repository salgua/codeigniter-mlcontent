<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Mlcontent example products controller
*
* @author Salvatore Guarino
* @link http://www.salgua.com
* @copyright Salvatore Guarino 2013
*
 * a products example controller
*/
class Products extends ML_Controller {
	
	function Products(){
		parent::__construct();
		$this->load->model('products_model');
	}
	
	public function create()
	{
		$this->form_validation->set_rules('ml-content[en]', 'content en', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('products/create');
		} else {
			$data = array('ml-content' => $this->inputdata['ml-content']);
			$this->products_model->save($data);
			print_r($this->inputdata);
		}
	}
	
	public function index()
	{
		$data['products'] = $this->products_model->get_all();
		$this->load->view('products/index', $data);
	}
}