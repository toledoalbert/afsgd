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

	//projeler
	//ika
	public function ika(){

		$ika = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'Istanbul Kultur Avi',
               'caption' => 'Hey siz, İstanbul’lular! İstanbul’un her yerini bildiğini düşünenler! <br>
               				Evet evet sizden bahsediyoruz. Kültür beşiği olan İstanbul’u karış karış bildiğinizi mi düşünüyorsunuz? <br>
               				Sultanahmet’ten başlayarak Beyoğlu’nu arşınlayarak İstiklal caddesini geçerken tarihin kokusunu alırım, <br>
               				baktığımda İstanbul’un üzerine kurulduğu kültürü görürüm diyorsanız ya da İstanbul neden kültür başkenti <br>
               				seçilmişti diye düşünüyorsanız... Geçip giderken şehrin acaba göremediğim neleri var diyorsanız, <br>
               				sizler için İstanbul Kültür Avı’ımız var. <br>
               				<br>
							Gelin, yaşadığımız bu güzel şehri, tarih boyunca değişirken aynı kalmış parçalarını keşfedelim. <br>
							Keşfederken öğrenelim. <br>
							Modern kültür olarak neler katmışız düşünelim. Kültürel yapbozumuzun bazı parçalarını beraber <br>
							yerleştirelim ve hep beraber eğlenirken arkadaşlarımızla yarışmanın tadını çıkaralım. <br>
							<br>
							“Yaşadığımız, doğup büyüdüğümüz kültürü ne kadar iyi tanıyoruz?” sorusunun cevabını el ele bulalım! <br>
							Haydi ne bekliyorsunuz ? <br>
							İstanbul Kültür Avı\'na siz de katılın!',
               
               'arrowDown' => true,
               'img' => 'img/ika.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_picture", $ika);
		$this->load->view("view_baslikYazi", $ika);
		$this->load->view("site_footer"); 
	}


}