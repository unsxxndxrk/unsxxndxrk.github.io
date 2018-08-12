<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title><?php bloginfo('name'); ?></title>
    <meta name="author" content="Zaviryukha Igor">
    <meta name="description" content="Landing page">
    <meta name="keywords" content="landing, page">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php wp_head(); ?>
    
</head>
<body>
    
    <div id="nav_menu_fixed" class="nav-menu__fixed fixed">
      <div class="container">
        <p class="nav-fixed__text text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellen
        </p>
        
        <?php wp_nav_menu( array('dropdown_menu' => 'Меню для мобильных устройств') ); ?>
        
      </div>
  </div>
    
    <div class="message-mobile fixed d-none" id="mes_mob_popup">
       <div class="message-mob__popup">
           <i class="fa fa-times absolute mes-mob__close" id="mes_mob_close"></i>
            <form action="" class="relative">
                <input type="text" class="absolute" placeholder="Search here..">
                <button class="absolute"><i class="fa fa-search"></i></button>
            </form>
            <ol type="number">
               <li>
                   1. <a href="#">Locate your license key</a>
               </li> 
               <li>
                   2. <a href="#">Find Code</a>
               </li> 
               <li>
                   3. <a href="#">Install</a>
               </li> 
            </ol>
            <hr class="mes-mob__hr absolute">
            <div class="message-mob__popup-footer absolute">
                <a href="#">Send a Message</a>
            </div>
        </div>
   </div>

    <div class="message fixed">
        <div class="message__popup absolute d-none fadeIn" id="mes_popup">
            <form action="" class="relative">
                <input type="text" class="absolute" placeholder="Search here..">
                <button class="absolute"><i class="fa fa-search"></i></button>
            </form>
            <ol type="number">
               <li>
                   1. <a href="#">Locate your license key</a>
               </li> 
               <li>
                   2. <a href="#">Find Code</a>
               </li> 
               <li>
                   3. <a href="#">Install</a>
               </li> 
            </ol>
            <hr>
            <div class="message__popup-footer">
                <a href="#">Send a Message</a>
            </div>
        </div>
        <div class="message__btn d-flex justify-content-center align-items-center relative" id="message_btn">
            <i class="fa fa-comment absolute mes_active"></i>
            <i class="fa fa-times absolute"></i>
        </div>
    </div>

    <header id="header" class="header">
        <div class="nav-fixed fixed">
            <div class="container">
                <div class="nav-fixed__wrapper d-flex justify-content-between align-items-center">
                     <div class="nav-fixed__filter d-flex align-items-center relative" id="filter">
                         <i class="fa fa-sliders absolute"></i>
                         <i class="fa fa-times absolute f_nav_opac" id="filter_close"></i>
                         <span>Filter</span>
                     </div>
                     <div class="nav-fixed__text d-flex">
                         <div class="nav-fixed__typo d-flex">
                             <div class="nav-fixed__num d-flex">
                                 <span>$</span>
                                 <span>99</span>
                             </div>
                             <div class="nav-fixed__typo-text">
                                 Lorem ipsum dolor sit amet, onsectetur adipisicing el
                             </div>
                         </div>
                         <a href="#" class="nav-fixex__btn">Join now</a>
                     </div>
                 </div>
            </div>
        </div>
        <div class="filter-bar fixed" id="filter_bar">
            <div class="filter-bar__wrapper">
                 <h3 class="filter-bar__heading">Categories</h3>
                 <hr class="filter-bar__hr">
                 <ul class="filter-bar__categories">
                     <li id="all" class="filter-bar__item-c">All</li>
                     <li id="agency" class="filter-bar__item-c">Agency</li>
                     <li id="business" class="filter-bar__item-c">Business</li>
                     <li id="blog" class="filter-bar__item-c">Blog</li>
                     <li id="photo" class="filter-bar__item-c">Photography</li>
                     <li id="portfolio" class="filter-bar__item-c">Portfolio</li>
                     <li id="restaurant" class="filter-bar__item-c">Restaurant</li>
                     <li id="shop" class="filter-bar__item-c">Shop</li>
                     <li id="wedding" class="filter-bar__item-c">Wedding</li>
                     <li id="free" class="filter-bar__item-c">Free</li>
                 </ul>

                 <h3 class="filter-bar__heading">Sort by</h3>
                 <hr class="filter-bar__hr">
                 <ul class="filter-bar__categories">
                     <li id="latest" class="filter-bar__item-c">Laters</li>
                     <li id="popular" class="filter-bar__item-c">Popular</li>
                     <li id="random" class="filter-bar__item-c">Random</li>
                 </ul>
            </div>
        </div>
        <div class="container">
            <nav class="navbar">
                <div class="navbar__inner-wrap d-flex justify-content-between align-items-center">
                    <div class="navbar__logo">
                        <img src="<?php echo TB_IMG_DIR; ?>logo.PNG" alt="logo">
                    </div>
                    <div class="burger-menu d-none relative" id="menu_btn">
                        <span class="absolute"></span>
                        <span class="absolute"></span>
                    </div>
                    
                    <?php wp_nav_menu( array('header_menu' => 'Меню в шапке') ); ?>
                    
                    <div class="navbar__logo-2 d-none ">
                        <img src="<?php echo TB_IMG_DIR; ?>logo.PNG" alt="logo">
                    </div>
                    <a href="#" class="navbar__btn d-block">
                        Join our Club
                    </a>
                </div>
            </nav>
            
            <div class="offer d-flex justify-content-center">
                <h2 class="offer__text text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident natus at ab dolore 
                    corporis sapiente, possimus saepe quidem hic doloribus asperiores ut molestiae dignissimos!
                </h2>
            </div>
        </div>
    </header>