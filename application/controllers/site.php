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
               'caption' => 'AFS Gonulluleri Dernegi kültürler arası anlayışı aşılamaya yönelik çalışmalar düzenlemektedir. ',
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



	//haberler duyurulari
	public function duyurular(){

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_duyuru");
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

	//gulen cocuk
	public function gulencocuk(){

		$ika = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'Gulen Cocuk Senligi',
               'caption' => 'Ulusal ve uluslararası engelli çocuk kuruluşlarının temsilcileri ve üyeleri, <br>
               				ülkemizdeki çocuklar ve aileleri ile organizasyon için ülkemize gelen çocuklar ve <br>
               				refakatçilerinin katıldığı Uluslararası Gülen Çocuk Şenliği\'nin amacı; ulusal <br>
               				ve uluslararası engelli-engelsiz çocukları bir araya getirerek “eşit yaşam <br>
               				haklarının önündeki engellerin kaldırılması” mesajını tüm kamuoyuna duyurmaları <br>
               				sağlamaktadır.<br>

							Uluslararası Gülen Çocuk Şenliği ilk yılından itibaren 6 sene boyunca <br>
							AFS Gönüllüleri Derneği  ve Türkiye Omurilik Felçlileri Derneği <br>
							ortaklığıyla yapılmıştır. Her yıl turuncu tişörtlü gönüllülerimiz <br>
							ile yer aldığımız etkinlik 23 Nisan haftası döneminde gerçekleşmektedir.',
               
               'arrowDown' => true,
               'img' => 'img/gulenc.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		//$this->load->view("view_picture", $ika);
		$this->load->view("view_baslikYazi", $ika);
		$this->load->view("site_footer"); 
	}

	//chapex
	public function chapex(){

		$chapex = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'ChapEx',
               'caption' => 'Gönüllülerimizin AFS İzlanda, Belçika ve Letonya gönüllüleri ile birlikte <br>
               				geliştirdikleri ChapEx (Chapter Exchange) projesi kapsamında her ülkeden 10 kişilik <br>
               				gönüllü gruplarının diğer ülkeleri belirlenecek tarihlerde birer hafta süre ile ziyaret <br>
               				ederek atölye çalışmalarına katılmaları, bilgi ve tecrübe alışverişinde bulunmaları ve <br>
               				AFS gönüllüleri arasında iş birliğini geliştirmeleri hedefleniyor.<br><br>
 
								Her bir ülkenin diğer üç ülkeye ev sahipliği yapacağı ChapEx projesinin ilk <br>
								aşaması İzlanda\'nın ev sahipliğinde  <br>
								Youth Bridging the Gap: Let´s See Beyond Our Gender and Cultural Glasses" <br>
								konusu ile gerçekleştirildi. ChapEx ilk aşamasına katılan 10 gönüllümüz unutulmaz <br>
								bir deneyimin parçası oldular. Projenin ikinci ayağı ise Belçika\'da "Youth bridging <br>
								the gap: On the Edge of Our Nationality and European Citizenship" konusu üzerine <br>
								gerçekleştirildi ve yine 10 gönüllümüz bu çalışmalarda yer aldı.<br><br>

								ChapEx İzlanda\'nın hikayesini okumak için: http://issuu.com/sivebasaran/docs/chapter-exchange',
               
               'arrowDown' => true,
               'img' => 'img/chapex.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_picture", $chapex);
		$this->load->view("view_baslikYazi", $chapex);
		$this->load->view("site_footer"); 
	}

	//afsd
	public function afsd(){

		$afsd = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'AFS\'D',
               'caption' => 'AFS’D, 2011 yılında hayata geçirilmiş, AFS Gönüllüleri Derneği bünyesindeki gönüller <br>
               					tarafından hazırlanmakta olan, AFS dergisi değil AFS’lilerin dergisidir. <br>
               					AFS’D sadece AFS’lilerle sınırlı kalmayıp Türkiye’deki AFS ağında yer alan <br>
               					kişilere ulaşabilecek bir dergidir. <br><br>

							AFS’D, yalnızca AFS’yi tanıtma amacı gütmeyen, içerisinde bir çok kişiye hitap edecek <br>
							röportajlar, kültür-yemek –gezi yazıları, köşe yazıları, bulmaca, duyurular, farklı <br>
							sanat ve kültürel etkinlikler hakkında haberlerin yer aldığı, AFS’liler ve AFS ailesi <br>
							hakkında farklı bilgiler veren yazılar barındıran, ayrıca kamuoyuna STK bilincini ve <br>
							önemini aşılamaya çalışan farklı ve enerjik bir dergidir.<br><br>

							Sosyal Medya Adresleri:<br>
							facebook.com/afsdergi<br>
							twitter.com/afsdergi<br>
							youtube.com/afsdergi<br>
							afsdergi.blogspot.com<br>
							afsdergi.tumblr.com',
               
               'arrowDown' => true,
               'img' => 'img/afsd.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_picture", $afsd);
		$this->load->view("view_baslikYazi", $afsd);
		$this->load->view("site_footer"); 
	}

	//aka
	public function aka(){

		$aka = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'Ankara Kültür Avı',
               'caption' => 'Ankara’nın sadece bir memur kenti olduğuna emin misiniz?
							Ankara’nın sadece İstanbul’a dönüşü müdür güzel olan yanı? <br><br>

							“Gri ve sıkıcı” zannettiğiniz Ankara’da size bir gün dolusu macera, eğlence ve keşif vaat ediyoruz. <br>
							Yarışmanın ardından AfterParty\'de doyasıya eğleniyoruz!! <br><br>

							İster kendiniz, ister arkadaşlarınızı da yanınıza alarak grupça gelin!<br>
							Haydi; bu şehrin hiç bilmediğiniz yüzlerini hep birlikte görün, tanımadığınız yönlerini beraber yarışarak keşfedin!<br>
							Sorularımızı en hızlı bilen grup olun ve hediye çekleri kazanın!<br><br>

							Emin olun, bu deneyimden sonra sizin için Ankara eski, sıkıcı Ankara olmayacak! <br><br>

							2005 yılından beri düzenlediğimiz bu etkinliğimize sizler de katılabilirsiniz!',
               
               'arrowDown' => true,
               'img' => 'img/aka.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_picture", $aka);
		$this->load->view("view_baslikYazi", $aka);
		$this->load->view("site_footer"); 
	}

	//kamplar
	public function kamplar(){

		$kamplar = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'Oryantasyon Kampları',
               'caption' => 'AFS Gönüllüleri Derneği\'nin AFS Türkiye programlarına yaptığı katkılardan birisi de düzenlediği <br>
               				oryantasyon kamplarıdır. <br><br>

							Her yıl AFS programlarıyla yurtdışına giden veya ülkemize gelen katılımcıların uyum süreçlerini <br>
							hızlandırmak, onlara bazı kavramları hatırlatmak amacıyla oryantasyon kampları düzenlemekteyiz. <br>
							Gönüllülerimiz tarafından organize edilen kamplar AFS programları katılımcıları ve gönüllülerimiz <br>
							için oldukça keyifli ve farkındalık yaratıcıdır.',
               
               'arrowDown' => true,
               'img' => 'img/kamplar.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		//$this->load->view("view_picture", $kamplar);
		$this->load->view("view_baslikYazi", $kamplar);
		$this->load->view("site_footer"); 
	}

	//hakkimizda
	public function hakkimizda(){
			
		$hakkimizda = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'Hakkımızda',
               'caption' => 'AFS Gönüllüleri Derneği (AFSGD) 1999 yılında kurulmuş olan bir sivil toplum kuruluşudur. <br>
               				Derneğin amaçları “gönüllülük bilincini ve gönüllü hizmet anlayışını geliştirmek, kültürlerarası anlayış <br>
               				ve  hoşgörü ortamına katkıda bulunmak ve Türkiye\'deki AFS mensuplarının dayanışmalarını arttırmaktır.”  <br><br>

							AFS Programlarından faydalanmış gönüllüler tarafından kurulmuş olan derneğimize üye olmak için <br>
							AFSli olunması zorunlu değildir. <br><br>

							Derneğimizin İstanbul, Ankara ve İzmir’de üç ayrı şubesi vardır.',
               
               'arrowDown' => true,
               'img' => 'img/hakkimizda.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		//$this->load->view("view_picture", $hakkimizda);
		$this->load->view("view_baslikYazi", $hakkimizda);
		$this->load->view("site_footer"); 
	}

	//nasil uye olunur
	public function nasil(){
			
		$nasil = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'Nasıl Üye Olunur',
               'caption' => 'Nasıl üye olunur?

							AFSGD üyesi olmak için <br><br>
							2 adet vesikalık fotoğrafını, <br>
							üye başvuru formunu <br>
							ve 10 TL üyelik giriş ücretini <br> <br>
							bize iletmen yeterlidir. <br>
							Üyelik aidatı yıllık 30 TL’dir. <br>
							Her türlü sorularınız için bize iletişim sayfamızda <br>
							yer alan bilgilerden ulaşabilirsiniz.',
               
               'arrowDown' => true,
               'img' => 'img/nasil.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		//$this->load->view("view_picture", $hakkimizda);
		$this->load->view("view_baslikYazi", $nasil);
		$this->load->view("site_footer"); 
	}

	//festikult
	public function festikult(){

		$fest = array(
               'backgroundImage' => '',
               'repeat' => '',
               'header' => 'Fest-i Kült',
               'caption' => 'Fest-i Kült’ün Temelleri Atılıyor<br><br>
							AFSGD tarafından öne çıkarılan kültürlerarası etkileşim ve gönüllülük kavramlarını <br>
							daha çok insanla paylaşmayı hedefleyen festivalimiz, ilk kez 2005 yılında Ankaralı <br>
							sinemaseverlerle buluştu. 25-28 Kasım 2005 tarihleri arasında gerçekleşen <br>
							AFSGD Ankara 1. Kültürlerarası Film Festivali’nde, 12 ülkeden aralarında Ahmet Uluçay, <br>
							Tan Tolga Demirci, Stefan Müler, Joscha Douma ve Ken Wardrop gibi isimlerin de bulunduğu <br>
							yönetmenlerin 61 filmi yer aldı. Festivalimizin bir diğer aktivitesi olan atölye <br>
							etkinliğimiz FSA’da (Fotoğraf Sinema Ankara) ve Ankara sokaklarında Gerçekleşti. <br>
							Kızılay Büyülü Fener Sineması’nın iki salonunda, üç gün boyunca gerçekleşen film <br>
							gösterimlerimiz; Almanya’dan yönetmenlerin de katıldıkları “OstWestfallenLippe Dostları” <br> 
							seansıyla başladı. Radyo ODTÜ ve Sky Türk’ün basın sponsorluğunu üstlendiği festivalimiz, <br>
							önemli Türk basın organlarının yanı sıra Almanya’nın Detmold kentinin yerel gazetesinde de <br>
							tanıtılmıştır.? <br><br>

							Sınırların Ötesine Açılan Festival<br><br>
							AFSGD Ankara Kültürlerarası Film Festivali’nin ikincisi 24 Kasım - 2 Aralık 2006 tarihleri <br>
							arasında yine Kızılay Büyülü Fener Sineması’nda gerçekleşti. 17 ülkeden toplam 84 filmin <br>
							gösterildiği festivalde, Alexander Roch ve David Burmeister’ın katılımıyla, 25- 30 Kasım <br>
							tarihleri arasında “Film Nasıl Çekilir” ve “Ankara Kültür Avı” konulu atölye çalışmaları <br>
							yapılmıştır. Festival ikinci yılında, eşine sık rastlanmayan bir uygulamayla, Kuzey Amerika’da <br>
							Alaska’nın Homer kasabasında “Fest-i Kült 2.2” adıyla bir özel gösterim gerçekleştirmiştir. <br>
							Bu gösterimin Alaska basınında geniş yer bulmuştur. <br><br>

							Gelenekselleşen Fest-i Kült<br><br>
							2007 yılında 23-29 Kasım tarihleri arasında yine Kızılay Büyülü Fener ve <br>
							FSA (Fotoğraf Sinema Ankara)’da gerçekleşen festivalimizin üçüncüsü, <br>
							film seçkisinde yer alan filmler ve atölye çalışmalarıyla Ankara’daki festivaller <br>
							arasında ayrı bir yerde durmuştur. 22 Kasım tarihinde Türk Amerikan Kültür Derneği’ndeki <br>
							açılış kokteyli ile izleyicilerle buluşan festivalimiz, Alexander Roch ve Ozan Adam’ın <br>
							yönetimindeki Film Nasıl Çekilir atölye çalışmalarıyla devam etmiştir.',
               
               'arrowDown' => true,
               'img' => 'img/festikult.jpg'
          );

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_picture", $fest);
		$this->load->view("view_baslikYazi", $fest);
		$this->load->view("site_footer"); 
	}

	public function myk(){

		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_myk");
		$this->load->view("site_footer"); 
	}

	public function iletisim(){
		$this->load->view("site_header");
		$this->load->view("horBlue_nav");
		$this->load->view("view_iletisim");
		$this->load->view("site_footer"); 
	}




}