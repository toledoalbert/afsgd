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
               'backgroundImage' => base_url().'/img/copadamlar.jpg',
               'repeat' => 'bottom repeat-x;',
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
               'repeat' => '',
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

		$data = array(
               'url' => 'istanbul',
               'sube' => 'Istanbul'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_duyuru", $data);
		$this->load->view("site_footer");

	}

	//izmir duyurulari
	public function izmir(){
		
		$data = array(
               'url' => 'izmir',
               'sube' => 'Izmir'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_duyuru", $data);
		$this->load->view("site_footer");

	}

	//ankara duyurulari
	public function ankara(){
		
		$data = array(
               'url' => 'ankara',
               'sube' => 'Ankara'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_duyuru", $data);
		$this->load->view("site_footer");
		
	}

	//myk duyurulari
	public function merkez(){
		
		$data = array(
               'url' => 'myk',
               'sube' => 'Merkezi Yonetim'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_duyuru", $data);
		$this->load->view("site_footer");
		
	}


}