<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Controller header
class Site extends CI_Controller {

	//Index function
	public function index(){

		$this->home();

	}

	//Home page
	public function home(){

		/*
		$this->load->model("model_get");
		$data ["results"] = $this->model_get->getData("home");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home", $data);
		$this->load->view("site_footer"); 
		*/

		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("view_carousel");
		$this->load->view("view_misyon");
		$this->load->view("view_divider");
		$this->load->view("view_subeler");
		$this->load->view("view_divider");
		$this->load->view("site_footer"); 

	}

	//
	public function about(){

		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");


	}

}