<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	public function index()
	{
            //$this->load->view('about');
		$this->data['pagebody'] = 'about';
		$this->render(); 
	}

}
