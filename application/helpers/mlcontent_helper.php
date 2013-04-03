<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Mlcontent Helper
*
* @author Salvatore Guarino
* @link http://www.salgua.com
* @copyright Salvatore Guarino 2013
*
*/

/**
 * Transform multilingual JSON in a string
 * @param string $mlangJsonString JSON string to be parsed
 * @param srting $lang optional language string
 */

function mlang($mlangJsonString, $lang = FALSE) {
	$CI =& get_instance();
	if($lang === FALSE)
	{
		$lang = $CI->config->item('mlcontent-default-language');
		if ($CI->session->userdata('mlang') != FALSE)
			{
				$lang = $CI->session->userdata('mlang');
			}
	}
	$data = json_decode($mlangJsonString, TRUE);
	return $data['_mlc'][$lang];
}
