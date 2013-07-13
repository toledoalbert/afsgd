<?php
class AFS404 extends CI_Controller
{
	public function __construct()
	{
	        parent::__construct();
	}

	public function index()
	{
		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_404");
		$this->load->view("site_footer"); 
	}
}
?>