<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Translation extends CI_Controller {
	public function index()
	{
		die('Unauthroized access');
	}

	public function getdata(){
		if (!$this->input->is_ajax_request()) {
   			exit('No direct script access allowed');
		}
		$page = $this->input->get('page');
		$lng = $this->input->get('lng') ? $this->input->get('lng') : 'en';
		if(empty($page)){
			return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode(['error'=>'page required','code'=>1]));
		}
		$content = file_get_contents(TRANSLATION_DIR_PATH.'/'.$lng.'.json');
		$response = ['error'=>'data not found','code'=>1];
		if(!empty($content)){
				$content = json_decode($content,true);
				$pageData = isset($content[$page]) ? $content[$page] : [];
				$response =['data'=>$pageData,'code'=>0];
		}
		
		return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode($response));
	}

}
