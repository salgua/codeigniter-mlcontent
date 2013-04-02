<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Mlcontent Controller
*
* @author Salvatore Guarino
* @link http://www.salgua.com
* @copyright Salvatore Guarino 2013
*
*/

class ML_Controller extends CI_Controller
{
	var $inputdata = array();
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('mlcontent');
		$this->config->load('mlcontent');
		$this->_parse_post_data();
	}
	
	private function _parse_post_data() {
		$form_field_prefix = $this->config->item('mlcontent-form-field-prefix');
		$form_field_prefix_length = strlen($form_field_prefix);
		if ($this->input->post())
		{
			$this->inputdata = $this->input->post();
			foreach ($this->inputdata as $key => &$item) {
				if (substr($key, 0, $form_field_prefix_length) == $form_field_prefix && is_array($item))
				{
					$item = json_encode(array('_mlc' => $item));
				}
			}
		}
	}
}