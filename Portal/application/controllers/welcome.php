<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('site_header');
		$this->load->view('view_login');
		$this->load->view('site_footer');
	}
}
