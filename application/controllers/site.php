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

		$misyon = array(
               'backgroundImage' => '',
               'header' => 'Misyonumuz',
               'caption' => 'AFS Gonulluleri Dernegi dunya barisi adina hizmet vermektedir! <br> Blah blah blah!',
               'arrowDown' => true
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_carousel2");
		$this->load->view("view_baslikYazi", $misyon);
		$this->load->view("view_divider");
		$this->load->view("view_subeler");
		$this->load->view("site_footer"); 

	}

	//Hakkimizda sayfasi
	public function hakkimizda(){

		$hakkimizda = array(
               'backgroundImage' => '',
               'header' => 'Hakkimizda',
               'caption' => 'AFS Gonulluleri Dernegi dunya <br> barisi adina hizmet vermektedir! <br> Blah blah blah! <br> blahblah blah',
               'arrowDown' => true
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_baslikYazi", $hakkimizda);
		$this->load->view("site_footer"); 


	}

	//Istanbul duyurulari
	public function istanbul(){

		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("site_footer");

	}

	//izmir duyurulari
	public function izmir(){
		
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("site_footer");

	}

	//ankara duyurulari
	public function ankara(){
		
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("site_footer");
		
	}


}