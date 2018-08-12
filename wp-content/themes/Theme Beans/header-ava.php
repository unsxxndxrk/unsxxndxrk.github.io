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

    <div class="view-block fixed text-center d-flex align-items-center" id="view_block">
        <p>View Live Demo</p>
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
                     <div class="nav-fixed__logo">
                         <h3>Ava</h3>
                     </div>
                     <div class="nav-fixed__text nav-fixed__text-ava d-flex align-items-center">
                         <a href="#" class="nav-fixed__a-btn-1">Buy - $59</a>
                         <span>or</span>
                         <a href="#" class="nav-fixed__a-btn-2">Join our club and get Ava + all our themes - $99</a>
                     </div>
                 </div>
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
                    Meet Ava, a boutique WooCommerce theme that’s perfect for portfolios & shops. Filled with handcrafted touches, Ava is designed to help you make an unforgettable first impression.
                </h2>
            </div>
        </div>
    </header>