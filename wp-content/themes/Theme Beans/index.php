    <?php get_header(); ?>

    <section id="first-banner" id="first_banner">
        <div class="container">
            <div class="first-banner__wrapper relative d-flex justify-content-center align-items-center flex-column">
                <div class="first-banner__wrapper-inner">
                    <a href="#" class="first-banner__slide active desktop pulse" id="desktop_slide">
                        <img src="<?php echo TB_IMG_DIR; ?>ava_monitor-1366x911.jpg" class="first-banner__only" alt="first_banner">
                    </a>
                    <a href="#" class="first-banner__slide tablet text-center pulse" id="tablet_slide">
                        <img src="<?php echo TB_IMG_DIR; ?>tablet.PNG" alt="first_banner">
                    </a>
                    <a href="#" class="first-banner__slide mobile text-center pulse" id="mobile_slide">
                        <img src="<?php echo TB_IMG_DIR; ?>mobile.PNG" alt="first_banner">
                    </a>
                </div>
                <div class="first-banner__text absolute d-flex justify-content-between align-items-center">
                    <div class="first-banner__text-text">
                        <span class="bold-letters">Ava</span> &mdash; Shop &amp; Portfolio <span class="hide768">WordPress Theme</span> 
                    </div>
                    <div class="first-banner__controls d-flex justify-content-between align-items-center">
                        <div class="first-banner__controls-item active" id="desktop">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="first-banner__controls-item" id="tablet">
                            <i class="fa fa-tablet"></i>
                        </div>
                        <div class="first-banner__controls-item" id="mobile">
                            <i class="fa fa-mobile"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="items" class="items">
        <div class="container">
            <div class="items__row d-flex justify-content-between">
                <div class="items__col">
                   
                   <?php
                        $indicator = 1;
                
                        foreach ( get_main_cards() as $main_card ) {
                            if ( $indicator % 2 != 0 ) {
                                
                                
                    ?>
                   
                    <div class="items__col-item">
                        <div class="item__col-inner relative">
                            <div class="item__col-item">
                                <a href="#"><img src="<?php echo $main_card['img']; ?>" alt="card"></a>
                                <div class="absolute item__hover d-flex justify-content-center align-items-center">
                                   <div class="item__col-btns d-flex align-items-center flex-column">
                                       <a href="#" class="item__col-btn">
                                           Preview Tabor
                                       </a>
                                       <a href="#" class="item__col-btn">
                                           View Details
                                       </a>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="items__col-text text-center">
                            <span class="bold-letters"><?php echo $main_card['name']; ?></span> &mdash; <?php echo $main_card['desc']; ?>
                        </div>
                    </div>
                    
                    <?php
                                $indicator++;
                            } else {
                                $indicator++;
                            }
                        }
                    ?>
                    
                </div>
                <div class="items__col">
                   
                   <?php
            
                       $indicator = 1;
                
                        foreach ( get_main_cards() as $main_card ) {
                            if ( $indicator % 2 == 0 ) {
                               
                    
                    ?>
                   
                    <div class="items__col-item">
                        <div class="item__col-inner relative">
                            <div class="item__col-item">
                                <a href="#"><img src="<?php echo $main_card['img']; ?>" alt="card"></a>
                                <div class="absolute item__hover d-flex justify-content-center align-items-center">
                                   <div class="item__col-btns d-flex align-items-center flex-column">
                                       <a href="#" class="item__col-btn">
                                           Preview Tabor
                                       </a>
                                       <a href="#" class="item__col-btn">
                                           View Details
                                       </a>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="items__col-text text-center">
                            <span class="bold-letters"><?php echo $main_card['name']; ?></span> &mdash; <?php echo $main_card['desc']; ?>
                        </div>
                    </div>
                    
                    <?php
                                $indicator++;
                            } else {
                                $indicator++;
                            }
                        }
                       
                    ?>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="test" class="test">
        <div class="container">
            <div class="test__wrapper">
               <div class="test__heading text-center">
                    <h2 class="test__heading-text">What folks are saying about as:</h2>
               </div>
               <div class="test__reviews text-center">
                   <div class="test__reviews-item test_1 test_active fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Harry Potter &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_2 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Ron Wisley &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_3 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Tom Reddle &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_4 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Peter Pan &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_5 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Captain America &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_6 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Toni Stark &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_7 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Mark Once &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_8 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Artur Twice &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_9 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Alice Quinn &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_10 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Ben Franclin &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_11 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, conseos iure, recusandae dicta reprehenderit dolore nisi laborum! Omnis, sit.
                       </h3>
                       <span class="test__reviews-author">&mdash; Ben Stiller &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_12 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Someone Somewere &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_13 fadeIn">
                       <h3 class="test__review-text">
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.ASrwqrqwrqwrqrqwrqwrqwr
                       </h3>
                       <span class="test__reviews-author">&mdash; Unknown Author &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_14 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae labore, fuga enim nam aperiam eius porro.
                       </h3>
                       <span class="test__reviews-author">&mdash; Tom Tom &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_15 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Author Author &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_16 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur 
                           adipisicing elit. Quaerat corporis tempora omnis vel non nisi.
                       </h3>
                       <span class="test__reviews-author">&mdash; Alisa Wellow &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_17 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quiuga doloribus itaque eaque, sint possimus.
                       </h3>
                       <span class="test__reviews-author">&mdash; Author from America &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_18 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, assumenda.
                       </h3>
                       <span class="test__reviews-author">&mdash; Tom Clansy &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_19 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus delectus dolorem veniam labore.
                       </h3>
                       <span class="test__reviews-author">&mdash; Peter Brown &mdash;</span>
                   </div>
                   <div class="test__reviews-item test_20 fadeIn">
                       <h3 class="test__review-text">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam sequi, quod voluptatu
                       </h3>
                       <span class="test__reviews-author">&mdash; Jake Parker &mdash;</span>
                   </div>
               </div>
               <div class="test__peoples d-flex justify-content-between align-items-center flex-wrap">
                   <img src="<?php echo TB_IMG_DIR; ?>test1.PNG" alt="test" id="test_1">
                   <img src="<?php echo TB_IMG_DIR; ?>test2.PNG" alt="test" id="test_2">
                   <img src="<?php echo TB_IMG_DIR; ?>test3.PNG" alt="test" id="test_3">
                   <img src="<?php echo TB_IMG_DIR; ?>test4.PNG" alt="test" id="test_4">
                   <img src="<?php echo TB_IMG_DIR; ?>test1.PNG" alt="test" id="test_5">
                   <img src="<?php echo TB_IMG_DIR; ?>test2.PNG" alt="test" id="test_6">
                   <img src="<?php echo TB_IMG_DIR; ?>test3.PNG" alt="test" id="test_7">
                   <img src="<?php echo TB_IMG_DIR; ?>test4.PNG" alt="test" id="test_8">
                   <img src="<?php echo TB_IMG_DIR; ?>test1.PNG" alt="test" id="test_9">
                   <img src="<?php echo TB_IMG_DIR; ?>test2.PNG" alt="test" id="test_10">
                   <img src="<?php echo TB_IMG_DIR; ?>test3.PNG" alt="test" id="test_11">
                   <img src="<?php echo TB_IMG_DIR; ?>test4.PNG" alt="test" id="test_12">
                   <img src="<?php echo TB_IMG_DIR; ?>test1.PNG" alt="test" id="test_13">
                   <img src="<?php echo TB_IMG_DIR; ?>test2.PNG" alt="test" id="test_14">
                   <img src="<?php echo TB_IMG_DIR; ?>test3.PNG" alt="test" id="test_15">
                   <img src="<?php echo TB_IMG_DIR; ?>test4.PNG" alt="test" id="test_16">
                   <img src="<?php echo TB_IMG_DIR; ?>test1.PNG" alt="test" id="test_17">
                   <img src="<?php echo TB_IMG_DIR; ?>test2.PNG" alt="test" id="test_18">
                   <img src="<?php echo TB_IMG_DIR; ?>test3.PNG" alt="test" id="test_19">
                   <img src="<?php echo TB_IMG_DIR; ?>test4.PNG" alt="test" id="test_20">
               </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients">
        <div class="container">
            <div class="clients__wrapper d-flex justify-content-between align-items-center">
                <img src="<?php echo TB_IMG_DIR; ?>client1.PNG" alt="c">
                <img src="<?php echo TB_IMG_DIR; ?>client2.PNG" alt="c">
                <img src="<?php echo TB_IMG_DIR; ?>client3.PNG" alt="c">
                <img src="<?php echo TB_IMG_DIR; ?>client4.PNG" alt="c">
                <img src="<?php echo TB_IMG_DIR; ?>client5.PNG" alt="c">
                <img src="<?php echo TB_IMG_DIR; ?>client6.PNG" alt="c">
            </div>
        </div>
    </section>

    <?php get_footer(); ?>