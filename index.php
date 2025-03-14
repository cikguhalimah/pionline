<?php
session_start();

$langmenu = ' <a href="./index.php" data-kodory="kodory-dropdown">BM</a>     <ul class="sub-menu"> <li class="menu-item"><a href="./jawi/index.php">Jawi</a></li> </ul> ';



?>

<html lang="en"  ><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;800&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/jquery.scrollbar.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href=" ./assets/fonts/flaticon.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/megamenu.css">
    <link rel="stylesheet" type="text/css" href=" https://dreamingtheme.kiendaotac.com/html/kodory/assets/css/dreaming-attribute.css">
    <link rel="stylesheet" type="text/css" href=" ./assets/css/style.css?v=1.0.0">
    <title>Cikgu Halimah - PI Online</title>
</head>
<body>
<div class="preloader">
    <div class="preloader_content">
        <div class="text-center">
            
            <img alt="Kodory" src="./assets/images/logo.png" style="margin:-2em">
            <div class="spinner"></div>
        </div>
    </div>
</div>    
<style>
    /* Make the preloader fill the entire screen */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 1); /* Semi-transparent background */
  box-shadow:inset 0px 0px 155px rgba(0,0,0,0.1);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 10000; /* Make sure it stays on top of other content */
}

/* Center the content inside the preloader */
.preloader_content {
    width:100%; max-width: 500px;
    margin:auto;
  
}
.spinner {
  position:relative;
  background-color: purple;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: conic-gradient(#71c0ef, #f7c723, #ed71a3, #f7c86f);
  animation: spin .7s linear infinite;
  margin:auto;
  box-shadow:  0px 0px 150px -75px black;
}
.spinner::before {
  content: "";
  background-color: white;
  position: absolute;
  width: 85%;
  height: 85%;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
  
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}

</style>

<header id="header" class="header style-02 header-dark header-sticky header-transparent">
    <div class="header-wrap-stick" style="height: 80px;">
        <div class="header-position">
            <div class="header-middle">
                <div class="kodory-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav">
                        <div class="header-logo">
                            <a href="index.html"><img alt="Kodory" src="./assets/images/logo.png" class="logo"></a></div>
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu" class="clone-main-menu kodory-clone-mobile-menu kodory-nav main-menu">


                                <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="kodory-menu-item-title" title="Pages" href="#">Pendidikan Islam Tahun 1</a>
                                    <!-- <span class="toggle-submenu"></span> -->
                                    <div role="menu" class="submenu" style="    width: max-content;">
                                    <div class="row px-4">
                                            <div class="col-md-12 px-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Ibadah </h4>
                                                        <ul class="listitem-list">                                                           
                                                            <li>
                                                                <a href="./index.php" target="_self">
                                                                    <span class="image">
                                                                        <img src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/images/label-new.png" class="attachment-full size-full" alt="img">
                                                                    </span>
                                                                    Air Dalam Kehidupan
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>

                                

                                <li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kodory-menu-item-title" title="Elements" href="#">Kuiz & Soalan</a>
                                    <!-- <span class="toggle-submenu"></span> -->
                                    <div role="menu" class="submenu" style="    width: max-content;">
                                    <div class="row px-4">
                                            <div class="col-md-12 px-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Kuiz Ibadah </h4>
                                                        <ul class="listitem-list">                                                           
                                                            <li>
                                                                <a href="https://quizizz.com/embed/quiz/674fbddedf8ea36b778f093d" target="_blank">
                                                                    <span class="image">
                                                                        <img src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/images/label-new.png" class="attachment-full size-full" alt="img">
                                                                    </span>
                                                                    Kuiz Air Dalam Kehidupan
                                                                </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                
                                <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="kodory-menu-item-title" title="Pages" href="#">Pautan Informatif</a>
                                    <!-- <span class="toggle-submenu"></span> -->
                                    <ul role="menu" class="submenu">
                                   
                                        <li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                            <a class="kodory-menu-item-title" title="About" href="https://online.fliphtml5.com/laiqy/ager/#p=7">Buku Teks Digital</a></li>
                                       
                                        <li id="menu-item-990" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                            <a class="kodory-menu-item-title" title="Page 404" href="https://d2.delima.edu.my/">Hab Pelajar <b>(DELIMA)</b></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-control">
                        <div class="header-control-inner">
                            <div class="meta-dreaming">
                                <ul class="wpml-menu">
                                    <li class="menu-item kodory-dropdown block-language">
                                        <?php echo $langmenu; ?>
                                    </li>
                                  
                                </ul>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            
            <ul class="wpml-menu">
                <li class="menu-item kodory-dropdown block-language">
                    <a href="#" data-kodory="kodory-dropdown">
                        <img src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/images/en.png" alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/images/it.png" alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <div class="wcml-dropdown product wcml_currency_switcher">
                        <ul>
                            <li class="wcml-cs-active-currency">
                                <a class="wcml-cs-item-toggle">USD</a>
                                <ul class="wcml-cs-submenu">
                                    <li>
                                        <a>EUR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.html"><img alt="Kodory" src="./assets/images/logo.png" class="logo"></a>
            </div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    
                </div>
            </div>
        </div>
    </div>
</header>

<div class="fullwidth-template">
    
    <div class="slide-home-04">
        
        
        <div class="response-product product-list-owl owl-slick equal-container better-height slick-initialized slick-slider slick-dotted" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            
            
            
        <div class="slick-list draggable" style=""><div class="slick-track" style="opacity: 1;  width: 100% transform: translate3d(0px, 0px, 0px);">
			
            <div class="slide-wrap first-slick slick-slide slick-current slick-active" style="margin-right: 0px; width: 100%;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" data-slick-index="0" aria-hidden="false">
                <!-- SUNRAY -->
                <div style="position:fixed;width:100vw;height:100vh;z-index: 1; ">
                    <img class="sunray" style="" src="./assets/images/sunray.png">
                </div>
                <!-- END SUNRAY  -->
                <img src="./assets/images/background.jpg" alt="image" style="height:100%; width:100%;">
                <div class="slide-info text-center" style="z-index: 2; top:30%;">
                    <div class="container">

                        <div class="slide-inner" data-content="main" data-content-cat="" data-page="">
                            <h1 class="text-stroke" style="font-size: 2.5em;margin-bottom: .71em;text-shadow: 0px 0px 15px rgba(255, 255, 255, 1);color: #2e3f47;">السَّلاَمُ عَلَيْكُمْ </h1>
                            <h1 class="text-pink text-stroke" style="zoom:.9">Pendidikan Islam Digital</h1>
                            <h1 class="text-stroke" style="text-shadow:0px 0px 15px rgba(255,255,255,1);">Tahun 1</h1>
                            <!-- <h5>Ibadah: <strong>Tajuk 1</strong></h5> -->
                            <!-- <a href="#" tabindex="0">1. Al-Quran <span style="font-weight:100 !important;">(tilawah)</span></a> -->
                            <div style="zoom:1.2">
                                <a tabindex="0" class="act btnsound" data-act="loadlist" data-target="ibadah">Ibadah <span style="font-weight:100 !important;">(m/s-88)</span></a>
                                <!-- <a tabindex="0" class=" disabled">Ibadah <span style="font-weight:100 !important; text-transform:none;">(akan datang)</span></a> -->
                                
                                
                            </div>
                            <!-- <a href="#" tabindex="0" class="disabled">2. Adab <span style="font-weight:100 !important;">(Akan Datang)</span></a> -->
                            <!-- <a href="#" tabindex="0">4. Sirah</a> -->
                            
							<!-- <a href="#" tabindex="0">Uji Minda <span style="font-weight:100 !important;">(Latih Tubi)</span></a> -->
                             <div class="none modallist" target="ibadah">
                               
                                <div  style="position:fixed; width:100%; left:0px; display:flex; zoom:1.1;">
                                    <div class="modal_content" style="">
                                     
                                            <svg class="close_modal" style="position:absolute; right:1em; top:5px; width: 30px; height:30px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 72 72">
                                            <path d="M 19 15 C 17.977 15 16.951875 15.390875 16.171875 16.171875 C 14.609875 17.733875 14.609875 20.266125 16.171875 21.828125 L 30.34375 36 L 16.171875 50.171875 C 14.609875 51.733875 14.609875 54.266125 16.171875 55.828125 C 16.951875 56.608125 17.977 57 19 57 C 20.023 57 21.048125 56.609125 21.828125 55.828125 L 36 41.65625 L 50.171875 55.828125 C 51.731875 57.390125 54.267125 57.390125 55.828125 55.828125 C 57.391125 54.265125 57.391125 51.734875 55.828125 50.171875 L 41.65625 36 L 55.828125 21.828125 C 57.390125 20.266125 57.390125 17.733875 55.828125 16.171875 C 54.268125 14.610875 51.731875 14.609875 50.171875 16.171875 L 36 30.34375 L 21.828125 16.171875 C 21.048125 15.391875 20.023 15 19 15 z" style="                                                
                                            "></path>
                                            </svg>
                                        <div>
                                            <h3 class=""><b style="color:#3593cb;">IBADAH</b></h3>
                                            <div style="margin-top:-1em; margin-bottom:1em;"><i>Jom Belajar Ibadah!</i></div>
                                        </div>
                                        
                                        <div style="margin-top:-1em;" class="">
                                            
                                            
                                            <a tabindex="0" class="my-2 btnsound browse" data-browse="ibadah" style="transition:none !important">1 - Air Dalam Kehidupan <span style="font-weight:100 !important;"></span></a>
                                            <!-- <br><a tabindex="0" class="disabled my-2 comingSoonBtn" style="transition:none !important">2. Air Dalam Kehidupan <span style="font-weight:100 !important;">(Akan Datang)</span></a> -->                                            
                                        </div>
                                        <!--                                         
                                        <div class="p-2"><a tabindex="0" style="transition:none !important">2. Kebersihan Amalanku <span style="font-weight:100 !important;">(m/s-78)</span></a></div>
                                        <div class="p-2"><a tabindex="0" style="transition:none !important">3. Wuduk Sempurna <span style="font-weight:100 !important;">(m/s-78)</span></a></div>
                                         -->
                                    </div>
                                </div>
                             </div>
                            
                        </div>


                        

                    </div>
                </div>
            </div>
			</div></div>
			</div>
    </div>            
</div>
        <div class=" none" data-content="ibadah" data-content-cat="" data-page="1">                                                                                   
                            
                             <div class="none " target="ibadah">
                               
                                <div class="" style="position:fixed;width:100%;left:0px;display:flex;zoom:1.1;padding: 0px ;top: 0px;height: 100%; z-index:1;">
                                                                        
                                    <!-- <div class=" a" style="position: absolute;top:50%;z-index:;width: 100%;">
                                        <a tabindex="0" class="act btnsound style_btn" data-act="loadlist" data-target="ibadah" style="float: right;z-index:3;zoom:1.2;margin-right: 25px;">Next 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                            </svg>
                                        </a>
                                        <a tabindex="0" class="act btnsound style_btn" data-act="loadlist" data-target="ibadah" style="float: left;z-index:3;margin-left: 25px;zoom:1.2;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 5 0 0; transform: rotate(180deg);"> 
                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                            </svg>
                                            Back
                                        </a>
                                    </div> -->

                                    <div class="modal_content" style="overflow-y: scroll;overflow-x: hidden;width: 100%;height: -webkit-fill-available;margin:auto;box-shadow: inset 0px 0px 155px rgb(0 59 89 / 0.15);">                                                                               
                                        <!-- <div class="" style="background: url(./assets/images/air/1a.png) no-repeat;background-size: cover;background-position-y: 380px;background-color:; padding-bottom: 250px;     margin: 0 -1em -1em -1em;"> -->
                                        <div class="" style="     margin: 0 -1em -1em -1em;">
                                            
                                            <!-- CLOUD -->
                                            <div style="position:absolute;top:0px;height: 250px;overflow:hidden;width: 100%; z-index:0;">
         <div class="x1">
            <div class="cloud"></div>
        </div>
    
        <div class="x2">
            <div class="cloud"></div>
        </div>
    
        <div class="x3">
            <div class="cloud"></div>
        </div>
    
        <div class="x4">
            <div class="cloud"></div>
        </div>
    
        <div class="x5">
            <div class="cloud"></div>
        </div>
        
    </div>
    <style>

/* KEYFRAMES */

@-webkit-keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

@-moz-keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

@keyframes animateCloud {
    0% {
        margin-left: -1000px;
    }
    100% {
        margin-left: 100%;
    }
}

/* ANIMATIONS */

.x1 {
	-webkit-animation: animateCloud 35s linear infinite;
	-moz-animation: animateCloud 35s linear infinite;
	animation: animateCloud 35s linear infinite;
	
	-webkit-transform: scale(0.65);
	-moz-transform: scale(0.65);
	transform: scale(0.65);
}

.x2 {
	-webkit-animation: animateCloud 20s linear infinite;
	-moz-animation: animateCloud 20s linear infinite;
	animation: animateCloud 20s linear infinite;
	
	-webkit-transform: scale(0.3);
	-moz-transform: scale(0.3);
	transform: scale(0.3);
}

.x3 {
	-webkit-animation: animateCloud 30s linear infinite;
	-moz-animation: animateCloud 30s linear infinite;
	animation: animateCloud 30s linear infinite;
	
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	transform: scale(0.5);
}

.x4 {
	-webkit-animation: animateCloud 18s linear infinite;
	-moz-animation: animateCloud 18s linear infinite;
	animation: animateCloud 18s linear infinite;
	
	-webkit-transform: scale(0.4);
	-moz-transform: scale(0.4);
	transform: scale(0.4);
}

.x5 {
	-webkit-animation: animateCloud 25s linear infinite;
	-moz-animation: animateCloud 25s linear infinite;
	animation: animateCloud 25s linear infinite;
	
	-webkit-transform: scale(0.55);
	-moz-transform: scale(0.55);
	transform: scale(0.55);
}

/* OBJECTS */

.cloud {
	background: #fff;
	background: -moz-linear-gradient(top,  #fff 5%, #e1e1e1 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(5%,#fff), color-stop(100%,#f1f1f1));
	background: -webkit-linear-gradient(top,  #fff 5%,#e1e1e1 100%);
	background: -o-linear-gradient(top,  #fff 5%,#e1e1e1 100%);
	background: -ms-linear-gradient(top,  #fff 5%,#e1e1e1 100%);
	background: linear-gradient(top,  #fff 5%,#e1e1e1 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f1f1f1',GradientType=0 );
	
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;
	
	-webkit-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
	box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);

	height: 120px;
	position: relative;
	width: 350px;
	zoom:0.3;
}

.cloud:after, .cloud:before {
    background: #fff;
	content: '';
	position: absolute;
	z-indeX: -1;
}

.cloud:after {
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;

	height: 100px;
	left: 50px;
	top: -50px;
	width: 100px;
}

.cloud:before {
	-webkit-border-radius: 200px;
	-moz-border-radius: 200px;
	border-radius: 200px;

	width: 180px;
	height: 180px;
	right: 50px;
	top: -90px;
}    
    

.content{padding-bottom:3rem;}

    </style>
                                             <!-- END CLOUD -->

                                            <div class=" animate-zoomin text-center" style="position:reset; padding:2em;">
                                                <svg class="close_content" data-target="ibadah" style="z-index:200; position:absolute; right:1em; top:55px; width: 30px; height:30px;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 72 72">
                                                <path d="M 19 15 C 17.977 15 16.951875 15.390875 16.171875 16.171875 C 14.609875 17.733875 14.609875 20.266125 16.171875 21.828125 L 30.34375 36 L 16.171875 50.171875 C 14.609875 51.733875 14.609875 54.266125 16.171875 55.828125 C 16.951875 56.608125 17.977 57 19 57 C 20.023 57 21.048125 56.609125 21.828125 55.828125 L 36 41.65625 L 50.171875 55.828125 C 51.731875 57.390125 54.267125 57.390125 55.828125 55.828125 C 57.391125 54.265125 57.391125 51.734875 55.828125 50.171875 L 41.65625 36 L 55.828125 21.828125 C 57.390125 20.266125 57.390125 17.733875 55.828125 16.171875 C 54.268125 14.610875 51.731875 14.609875 50.171875 16.171875 L 36 30.34375 L 21.828125 16.171875 C 21.048125 15.391875 20.023 15 19 15 z" style="                                                
                                                "></path>
                                                </svg>
                                                <h3 class=""><b style="color:#3593cb;">IBADAH</b></h3>
                                                <h1 class="text-pink text-stroke h1style" style="zoom:1.1;margin-top: 0em;">Air Dalam Kehidupan</h1>
                                                <h3 class=""><b style="background: #ed71a3;color: #fff;padding: .3em .7em;border-radius: .3em;">BAHAGIAN-BAHAGIAN AIR</b></h3>
                                                <hr style="padding:0;margin:3em 0 0 !important;border: 1px dashed #eee;background: none;">
                                                <!-- <div style="margin:1.5em 0em 0em; font-size:1.5em;"><b><i>Ada berapa jenis air menurut Islam?</i></b></div> -->
                                                
                                                <!-- CONTENT BAHAGIAN BAHAGIAN AIR  -->
                                                <!-- PAGE 1 -->
                                                <div class="content" data-contentpage="1">
                                                    <div style="margin:1.5em 0em 0em;font-size:1.5em;background:rgba(255,255,255,0);border-radius:1em;padding: .5em 1em;">
                                                        <div style="margin: .2em 0em .8em 0em;font-size: 1.15em; color: #71c0ef;display: ;">
                                                            <b><i class="">1. Air Mutlak</i></b>
                                                            
                                                            <!-- <b><i >2. Air musyammas</i></b>
                                                            <b><i>3. Air musta'mal</i></b>
                                                            <b><i>4. Air muqoyyad</i></b>
                                                            <b><i>5. Air mutannajis</i></b> -->
                                                        </div>
                                                        <p class="z-2 p-relative" style=" font-size:.9em;">
                                                            Air <b>mutlak</b> ialah air yang <b>suci lagi menyucikan</b>. Ia tidak bercampur dengan benda najis dan masih dalam keadaan asal seperti 
                                                            <b class="text-pink">air hujan</b>, 
                                                            <b class="text-pink">air sungai</b>, 
                                                            <b class="text-pink">air perigi</b>, 
                                                            <b class="text-pink">air mata air</b>,
                                                            <b class="text-pink">air tasik</b>, 
                                                            <b class="text-pink">air salji</b>,
                                                            <b class="text-pink">air laut</b>, dan 
                                                            <b class="text-pink">air embun</b>.
                                                        </p>
                                                    </div>
                                                    <div style="margin:1em 0; zoom:1.1;" class="">                                                                                                        
                                                        <a tabindex="0" class="my-2 btnsound style_btn showcontent" data-target="contohair" style="transition:none !important; z-index:1;" >
                                                            JOM LIHAT CONTOH AIR <span style="font-weight:100 !important;"></span>
                                                            <img src="./assets/images/air/click.png" style="width:45px; position:absolute; top:15px; right:-10px;" />
                                                        </a>                                                                                                                                                        
                                                        <div class="row d-flex none" style="display:none !important; position:relative;" data-content="contohair">
                                                            <div class="col-12 text-center mb-3">
                                                                <img src="./assets/images/air/sumber/air_hujan.png?" class="imgstyle1">
                                                                <img src="./assets/images/air/sumber/air_sungai.png?" class="imgstyle1">
                                                                <img src="./assets/images/air/sumber/air_telaga.png?" class="imgstyle1">
                                                                <img src="./assets/images/air/sumber/air_mata_air.png?" class="imgstyle1">
                                                                <img src="./assets/images/air/sumber/air_tasik.png?" class="imgstyle1">
                                                                <img src="./assets/images/air/sumber/air_salji.png?" class="imgstyle1">
                                                                <img src="./assets/images/air/sumber/air_laut.png?" class="imgstyle1">
                                                                <img src="./assets/images/air/sumber/air_embun.png?v=" class="imgstyle1">
                                                            </div>
                                                            <a tabindex="0" class="act btnsound style_btn nextpage " data-cat="contentpage" data-target="2" style="box-shadow:none; margin:auto;">Seterusnya 
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                                    <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                                </svg>
                                                            </a>
                                                           
                                                        </div>                                         
                                                    </div>
                                                </div>
                                               
                                                <!-- PAGE 2 -->
                                                <div class="content none" data-contentpage="2">
                                                    <div style="margin:1.5em 0em 0em;font-size:1.5em;background:rgba(255,255,255,0);border-radius:1em;padding: .5em 1em;">
                                                        <div style="margin: .2em 0em .8em 0em;font-size: 1.15em; color: #71c0ef;display: ;">
                                                            <b><i class="">2. Air Musyammas</i></b>                                                                                                                        
                                                        </div>                                                        
                                                        <p class="z-2 p-relative" style=" font-size:.9em;">Air dalam bekas yang <b>boleh berkarat</b> dan <b>terdedah di bawah matahari</b> yang sangat terik di negara bercuaca panas. <b class="text-pink">Makruh</b> menggunakannya pada tubuh badan.</p>
                                                    </div>
                                                    <div style="margin:1em 0; zoom:1.1;" class="">                                                                                                        
                                                        <div class="col-12 text-center mb-3">
                                                            <img src="./assets/images/air/sumber/musyammas.png?" style="width:100%; max-width:300px;">                                                            
                                                        </div>
                                                        <a tabindex="0" class="act btnsound style_btn nextpage forward" data-cat="contentpage" data-target="1" style="box-shadow:none; margin:auto;"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; transform:rotate(180deg) "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                            Kembali
                                                        </a>
                                                        <a tabindex="0" class="act btnsound style_btn nextpage backward" data-cat="contentpage" data-target="3" style="box-shadow:none; margin:auto;">Seterusnya 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg>
                                                        </a>                                      
                                                    </div>
                                                </div>

                                                <!-- PAGE 3 -->
                                                <div class="content none" data-contentpage="3">
                                                    <div style="margin:1.5em 0em 0em;font-size:1.5em;background:rgba(255,255,255,0);border-radius:1em;padding: .5em 1em;">
                                                        <div style="margin: .2em 0em .8em 0em;font-size: 1.15em; color: #71c0ef;display: ;">
                                                            <b><i class="">3. Air Musta'mal</i></b>                                                                                                                        
                                                        </div>                                                        
                                                        <p class="z-2 p-relative" style=" font-size:.9em;">Air yang <b>telah digunakan</b> untuk <b>berwuduk</b> atau <b>mandi wajib</b>. Kadar airnya adalah <b>kurang dari dua kolah</b> serta <b>tidak merubah </b>salah satu sifat air <b class="text-pink">(bau, warna dan rasa)</b>.</p>
                                                    </div>
                                                    <div style="margin:1em 0; zoom:1.1;" class="">                                                                                                        
                                                        <div class="col-12 text-center mb-3">
                                                            <img src="./assets/images/air/sumber/musta'mal.png?" style="width:100%; max-width:200px;">                                                            
                                                        </div>
                                                        <a tabindex="0" class="act btnsound style_btn nextpage forward" data-cat="contentpage" data-target="2" style="box-shadow:none; margin:auto;"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; transform:rotate(180deg) "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                            Kembali
                                                        </a>
                                                        <a tabindex="0" class="act btnsound style_btn nextpage backward" data-cat="contentpage" data-target="4" style="box-shadow:none; margin:auto;">Seterusnya 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg>
                                                        </a>                                      
                                                    </div>
                                                </div>

                                                <!-- PAGE 4 -->
                                                <div class="content none" data-contentpage="4">
                                                    <div style="margin:1.5em 0em 0em;font-size:1.5em;background:rgba(255,255,255,0);border-radius:1em;padding: .5em 1em;">
                                                        <div style="margin: .2em 0em .8em 0em;font-size: 1.15em; color: #71c0ef;display: ;">
                                                            <b><i class="">4. Air Muqayyad</i></b>                                                                                                                        
                                                        </div>                                                        
                                                        <p class="z-2 p-relative" style=" font-size:.9em;">Air tersebut <b>mengubah warna</b>, <b>bau</b> atau <b>rasa</b>. Ia juga mengubah nama air <b>seperti</b> <b class="text-pink">air kopi</b> dan <b class="text-pink">air sabun</b>.</p>
                                                    </div>
                                                    <div style="margin:1em 0; zoom:1.1;" class="">                                                                                                        
                                                        <div class="col-12 text-center mb-3">
                                                            <img src="./assets/images/air/sumber/muqayyad.png?a" style="width:100%; max-width:400px;">                                                            
                                                            
                                                        </div>
                                                        <a tabindex="0" class="act btnsound style_btn nextpage forward" data-cat="contentpage" data-target="3" style="box-shadow:none; margin:auto;"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; transform:rotate(180deg) "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                            Kembali
                                                        </a>
                                                        <a tabindex="0" class="act btnsound style_btn nextpage backward" data-cat="contentpage" data-target="5" style="box-shadow:none; margin:auto;">Seterusnya 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg>
                                                        </a>                                      
                                                    </div>
                                                </div>

                                                <!-- PAGE 5 -->
                                                <div class="content none" data-contentpage="5">
                                                    <div style="margin:1.5em 0em 0em;font-size:1.5em;background:rgba(255,255,255,0);border-radius:1em;padding: .5em 1em;">
                                                        <div style="margin: .2em 0em .8em 0em;font-size: 1.15em; color: #71c0ef;display: ;">
                                                            <b><i class="">5. Air Mutanajjis</i></b>                                                                                                                        
                                                        </div>                                                        
                                                        <p class="z-2 p-relative text-start" style=" font-size:.9em;">
                                                            <b>Air kurang dua kolah:</b> <br>
                                                            <b class="text-pink">Dimasuki najis</b> ke dalamnya walaupun <b class="text-pink">tidak merubah</b> sifat air.    
                                                            <br><br>
                                                            <b>Air yang lebih dua kolah:</b> <br>
                                                            <b class="text-pink dashed-underline">Dimasuki najis</b> kedalamnya dan <b class="text-pink">tidak merubah</b> sifat air.
                                                            <!-- Air tersebut <b>mengubah warna</b>, <b>bau</b> atau <b>rasa</b>. Ia juga mengubah nama air <b>seperti</b> <b class="text-pink">air kopi</b> dan <b class="text-pink">air sabun</b>. -->
                                                        </p>
                                                    </div>
                                                    <div style="margin:1em 0; zoom:1.1;" class="">                                                                                                        
                                                        <div class="col-12 text-center mb-3">
                                                            <img src="./assets/images/air/sumber/mutannajis.png?a" style="width:100%; max-width:500px;">                                                            
                                                            
                                                        </div>
                                                        <a tabindex="0" class="act btnsound style_btn nextpage forward" data-cat="contentpage" data-target="4" style="box-shadow:none; margin:auto;"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; transform:rotate(180deg) "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                             Kembali
                                                        </a>   
                                                        <a tabindex="0" class="act btnsound style_btn nextpage backward" data-cat="contentpage" data-target="6" style="box-shadow:none; margin:auto;"> 
                                                            Seterusnya
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                             
                                                        </a>  
                                                       
                                                    </div>
                                                </div>

                                                <!-- PAGE 6 -->
                                                <div class="content none" data-contentpage="6">
                                                    <div style="margin:1.5em 0em 0em;font-size:1.5em;background:rgba(255,255,255,0);border-radius:1em;padding: .5em 1em;">
                                                        <div style="margin: .2em 0em .8em 0em;font-size: 1.15em; color: #71c0ef;display: ;">
                                                            <b><i class="">Adab Menggunakan Air</i></b>                                                                                                                        
                                                        </div>                                                        
                                                        <p class="z-2 p-relative text-start" style=" display:flex; font-size:.9em;">
                                                        <div class="col-12 text-center mb-3">
                                                            <img src="./assets/images/air/sumber/adab_air4.png?" style="width:100%; max-width:230px; margin-top:-30px">                                                            
                                                            
                                                        </div>
                                                            <ul style="list-style:none; text-align:left; margin:auto; max-width: 630px;">
                                                                <li><b>1.</b> <b class="text-pink">Menutup paip</b> selepas digunakan.</li>
                                                                <li><b>2.</b> Menggunakan air mengikut <b class="text-pink">keperluan.</b></li>
                                                                <li><b>3.</b> <b class="text-pink">Tidak membuang sampah</b> ke dalam laut dan sungai.</li>
                                                            </ul>                                                            
                                                        </p>
                                                    </div>
                                                    <div style="margin:1em 0; zoom:1.1;" class="">                                                                                                        
                                                        
                                                        <a tabindex="0" class="act btnsound style_btn nextpage forward" data-cat="contentpage" data-target="5" style="box-shadow:none; margin:auto;"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; transform:rotate(180deg) "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                             Kembali
                                                        </a>   
                                                        <a tabindex="0" class="act btnsound style_btn nextpage backward" data-cat="contentpage" data-target="7" style="box-shadow:none; margin:auto;"> 
                                                            Seterusnya
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                             
                                                        </a>  
                                                      
                                                    </div>
                                                </div>

                                                <!-- PAGE 7 -->
                                                <div class="content none" data-contentpage="7">
                                                    <div style="margin:1.5em 0em 0em;font-size:1.5em;background:rgba(255,255,255,0);border-radius:1em;padding: .5em 1em;">
                                                        <div style="margin: .2em 0em .8em 0em;font-size: 1.15em; color: #71c0ef;display: ;">
                                                            <b><i class="">RUMUSAN</i></b>                                                                                                                        
                                                        </div>                                                        
                                                        <p class="z-2 p-relative text-start" style="font-size:.9em;">
                                                            <b>Air mutlak</b> digunakan utk <b class="text-pink">menghilangkan najis</b>, <b class="text-pink">berwuduk</b> dan <b class="text-pink">mandi wajib</b>. Begitu juga <b>air musyammas</b>, tetapi penggunaannya pada tubuh badan <b class="text-pink">adalah makruh</b>.                                                      
                                                        </p>
                                                    </div>
                                                    <div style="margin:1em 0; zoom:1.1;" class="">                                                                                                        
                                                        
                                                        <a tabindex="0" class="act btnsound style_btn nextpage forward" data-cat="contentpage" data-target="6" style="box-shadow:none; margin:auto;"> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; transform:rotate(180deg) "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                             Kembali
                                                        </a>   
                                                        <!-- <a tabindex="0" class="act btnsound style_btn nextpage" data-cat="contentpage" data-target="7" style="box-shadow:none; margin:auto;"> 
                                                            Seterusnya
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" id="arrow" style="zoom: .6; margin: -4px 0 0 5; "> 
                                                                <path fill-rule="evenodd" d="M.366 19.708c.405.39 1.06.39 1.464 0l8.563-8.264a1.95 1.95 0 0 0 0-2.827L1.768.292A1.063 1.063 0 0 0 .314.282a.976.976 0 0 0-.011 1.425l7.894 7.617a.975.975 0 0 1 0 1.414L.366 18.295a.974.974 0 0 0 0 1.413" style="fill: #ffffff;stroke: white;"></path>
                                                            </svg> 
                                                             
                                                        </a>   -->
                                                        <a href="https://quizizz.com/embed/quiz/674fbddedf8ea36b778f093d" target="_blank" tabindex="0" class="my-2 btnsound nextpage style_btn with_pointer " data-target="contohair" style="transition:none !important; z-index:1;">
                                                            Uji Minda <span style="font-weight:100 !important;"></span>
                                                            <img src="./assets/images/air/click.png" style="width:45px; position:absolute; top:15px; right:-10px;">
                                                        </a>                                   
                                                    </div>
                                                </div>
                                                

                                                <style>
                                                    .imgstyle1{border-radius:5px; width:100%; max-width:170px; margin:.3em;}
                                                </style>
                                            </div>                                                                                       
                                        </div>  
                    

                                    </div>
                                </div>
                             </div>
                            
                        </div>
<footer id="footer" class="footer style-04">
    <div class="section-001 section-006">
        <div class="container">
            <div class="kodory-newsletter style-01">
                <div class="newsletter-inner">
                    <div class="newsletter-info">
                        <div class="newsletter-wrap" style="width:auto;">
                            <h3 class="title">Ikuti Cikgu<span></span></h3>
                            <h4 class="subtitle">Dapatkan Info Menarik</h4>
                            <p class="desc">Sertai Cikgu di Telegram untuk dapatan info & tips Belajar & Jawab Pendidikan Islam</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="newsletter-form-inner d-flex">
                            
                            <a href="https://t.me/cikguhalimahchannel" target="_blank" class="button btn-submit submit-newsletter" style="position:relative; margin:auto; zoom:1.2; box-shadow:0px 0px 35px rgba(0,0,0,0.3);">
                                <span class="text">Follow Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-025">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 d-lg-none">
                    <div class="logo-footer">
                        <img src="./assets/images/logo.png" class="az_single_image-img attachment-full" alt="img">
                    </div>
                    <div class="footer-desc">Shukran Jazilan Hadir.<br>
                        Belajar sambil enjoy di pi-online
                    </div>
                    <div class="kodory-socials style-01">
                        <div class="content-socials">
                            <div class="socials-list">
                                <li>
                                    <a href="https://www.facebook.com/officialsksn1010/?locale=ms_MY" target="_blank">
                                        <img src="./assets/images/sksn.png" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.moe.gov.my/" target="_blank">
                                    <img src="./assets/images/kpm.png" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://d2.delima.edu.my/" target="_blank">
                                        <img src="./assets/images/delima.png" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ains.moe.gov.my/" target="_blank">
                                        <img src="./assets/images/enilam.png" />
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                    <style>
                        .kodory-socials.style-01 .socials-list li a{width:70px; height:70px;}
                    </style>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kodory-listitem style-04">
                        <div class="listitem-inner">
                            <h4 class="title">Pautan Berguna</h4>
                            <ul class="listitem-list">
                                <li>
                                    <a href="https://online.fliphtml5.com/laiqy/ager/#p=7" target=" _self">
                                        Buku Teks Digital </a>
                                </li>
                               
                                <li>                                    
                                    <a href="https://d2.delima.edu.my/" target=" _self">
                                    Hab Pelajar <b>(DELIMA)</b></a>
                                </li>
                                <li>
                                    Jumlah Pelawat <b><?php echo date("d",time()) + date("m",time()) + date("H",time()); ?> Visitors</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="logo-footer">
                        <img src="./assets/images/logo.png" class="az_single_image-img attachment-full" alt="img">
                    </div>
                    <div class="footer-desc">Shukran Jazilan Hadir.<br>
                        Belajar sambil enjoy di pi-online (Ustazah Halimah)
                    </div>
                    <div class="kodory-socials style-01">
                        <div class="content-socials">
                            <ul class="socials-list">
                                <li>
                                    <a href="https://www.facebook.com/officialsksn1010/?locale=ms_MY" target="_blank">
                                        <img src="./assets/images/sksn.png" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.moe.gov.my/" target="_blank">
                                    <img src="./assets/images/kpm.png" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://d2.delima.edu.my/" target="_blank">
                                        <img src="./assets/images/delima.png" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ains.moe.gov.my/" target="_blank">
                                        <img src="./assets/images/enilam.png" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kodory-listitem style-04">
                        <div class="listitem-inner">
                            <h4 class="title">
                                Latihan & Bimbingan </h4>
                            <ul class="listitem-list">
                                
                                <li>
                                    <a href="#" target="_self">
                                        Latih Tubi (Akan Datang)</a>
                                </li>
                                <li>
                                    <a href="#" target="_self">
                                        Latihan Tambahan (Akan Datang)</a>
                                </li>
                                <li>
                                    <a href="#" target="_self">
                                        Soalan Exam (Akan Datang)</a>
                                </li>
                                <li>
                                    <a href="#" target="_self">
                                        Bimbingan Terus (Akan Datang)</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-016">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>© Copyright 2025 <a href="#">Cikgu Halimah</a>. All Rights Reserved.</p>
                </div>
                <!--                 
                <div class="col-md-6">
                    <div class="payment">
                        <img src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/images/payment.png" class="az_single_image-img attachment-full" alt="img">
                    </div>
                </div>
                 -->
            </div>
        </div>
    </div>
</footer>
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="index.html">
					<span class="icon">
						<span class="fa fa-home"></span>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="wishlist.html">
					<span class="icon">
						<span class="flaticon-heart"></span>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="cart.html">
					<span class="icon">
						<span class="flaticon-shopping-bag-1"></span>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="my-account.html">
					<span class="icon">
						<span class="flaticon-profile"></span>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop">
    <i class="fa fa-angle-double-up"></i>
</a>




<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/jquery-1.12.4.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/bootstrap.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/chosen.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/countdown.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/jquery.scrollbar.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/lightbox.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/magnific-popup.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/slick.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/jquery.zoom.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/threesixty.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/jquery-ui.min.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/mobilemenu.js"></script>
<script src="https://dreamingtheme.kiendaotac.com/html/kodory/assets/js/functions.js"></script>

<script src="./assets/js/functions.js?v=1.0.10"></script>
<style>
    .none{display:none;}
    a.actived{ background:#ed71a3 !important; }
    .h1style{        
        font-family: 'Baloo 2', sans-serif;
        font-weight: 700;
        margin: 0 0 10px 0;
    }

    .z-2{ z-index:2; }
    .p-relative{ position:relative; }

    .slide-wrap .slide-info a{}
    .next_prev{
        display: inline-block;
        height: 46px;
        line-height: 46px;
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        padding: 0 30px;
        border-radius: 30px;
        background-color: #71c0ef;
        -webkit-transition: all 0.25sease 0s;
        -moz-transition: all 0.25s ease 0s;
        -o-transition: all 0.25s ease 0s;
        transition: all 0.25sease 0s;
        position: relative;
        font-family: 'Baloo 2', sans-serif;
        text-transform: uppercase;    
    }

    .text-stroke{ text-shadow:0px 0px 15px rgba(255,255,255,1) }
    .text-pink{color:#ed71a3; }
    
    .modallist{ padding-top:1.5em; position:absolute;}
    .modala{
        display:none; position:fixed; margin:0px; padding:0px; left:0px; top:0px; width:100vw; height:100vh;
    }
    .modal_content a{ cursor:pointer;  box-shadow:0px 0px 15px rgba(0,0,0,0.3)}
    a{ cursor:pointer; }
    a.act{ cursor:pointer;    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.5);}
    a:focus{   animation: gummy-bounce 0.6s ease-out !important; }
    .close_modal {cursor:pointer;}
    .close_modal path { fill: #ffffff; stroke: black; stroke-width: 1px;}
    .close_modal:hover path{ fill:#ed71a3; stroke: #ed71a3; }
    .modal_content{ 
        position:relative;
        margin:auto; padding:1em; padding-top: 1.2em; border-radius:2em; background:rgba(255, 255, 255, 1); box-shadow:0px 0px 35px rgba(0,0,0,0.3);
        border: 5px solid #f0f0f0;
    } 

    .slide-info{ top:38%; }
    img.logo{ max-width:180px; margin:-20px; }
    .disabled{background:#aaaaaa !important; cursor:default;}
    

    .megamenu,[role="menu"],.sub-menu {border-radius:2em;}


    @keyframes slideInUp { from { transform: translateY(0); opacity: 1; } to { transform: translateY(0); opacity: 1; } }
    @keyframes gummy-bounce {
    0% { transform: scale(1); }
    30% { transform: scale(0.85); /* Squish effect */ }
    50% { transform: scale(1.1); /* Stretch effect */ }
    70% { transform: scale(0.95); /* Slight recoil */ }
    100% { transform: scale(1); }
    }

.animate-zoomin{
    animation: zoomIn 1.5s;    
}    
.animated {
    animation: slideInUp 0.5s ease-out;
}


div::-webkit-scrollbar {
  width: 8px; /* Adjust scrollbar width */
}

div::-webkit-scrollbar-track {
  background: transparent; /* Removes the track background */
}

div::-webkit-scrollbar-thumb {
  background: #888; /* Sets the thumb color */
  border-radius: 4px; /* Optional: Rounded corners for the thumb */
}

div::-webkit-scrollbar-thumb:hover {
  background: #555; /* Changes thumb color on hover */
}



/* SUN RAY */
@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes pulse {
    0%, 100% {
        opacity: .7;
        transform: scale(1);
        
    }
    50% {
        opacity: 0.3;
        transform: scale(1.1);
    }
}

.kodory-menu-item-title{ }
.kodory-menu-next-panel:before {
    font-size: 2rem;
    content: "\203A";
    
}
.kodory-menu-panels-actions-wrap .kodory-menu-prev-panel:before {
    font-size: 2rem;
    content: "\2039";    
}

.sunray{ animation: rotate 25s linear infinite; position: absolute; top:-65vh;}
.btnsound.style_btn.nextpage{ 
    box-shadow:0px 0px 25px rgba(0,0,0,.3) !important;
}
@media screen and (max-width: 1200px) { 
    .sunray{ top:-35vh; } 
    .btnsound.style_btn.nextpage{ 
        position:fixed; bottom: 2rem;
        left: calc(50% - 70px); 
    }
    .with_pointer{ margin-bottom: 0px !important; margin-left:70px !important;}
    .forward{ margin-left:-70px !important;  }
    .backward{ margin-left:70px !important; }
}
@media screen and (max-width: 768px) {
    .sunray{ top:0px; }
    
}

/* animation: rotate 5s linear infinite; */


/* WATER WAVE */




</style>
<script>
$(document).on("click",".kodory-menu-item-title",function(event){        
    $(this).parent().find(".kodory-menu-next-panel").click();
});
</script>
<div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div style="left: -1000px; overflow: scroll; position: absolute; top: -1000px; border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"><div style="border: none; box-sizing: content-box; height: 200px; margin: 0px; padding: 0px; width: 200px;"></div></div>


<div class="modala " style="">
    <div class="modala_inner" style="background:#fff; width:inherit; height:inherit;">



    </div>
</div>

</body></html>