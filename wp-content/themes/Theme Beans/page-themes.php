    <?php get_header('themes'); ?>

    <section id="items" class="items">
        <div class="container">
            <div class="items__row items__row-theme d-flex justify-content-between">
                <div class="items__col">
                   
                   <?php
                        $indicator = 1;
                
                        foreach ( get_themes_cards() as $themes_card ) {
                            if ( $indicator % 2 != 0 ) {
                                
                                
                    ?>
                   
                    <div class="items__col-item">
                        <div class="item__col-inner relative">
                            <div class="item__col-item">
                                <a href="#"><img src="<?php echo $themes_card['img']; ?>" alt="1"></a>
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
                            <span class="bold-letters"><?php echo $themes_card['name']; ?></span> &mdash; <?php echo $themes_card['desc']; ?>
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
                
                        foreach ( get_themes_cards() as $themes_card ) {
                            if ( $indicator % 2 == 0 ) {
                               
                    
                    ?>
                   
                    <div class="items__col-item">
                        <div class="item__col-inner relative">
                            <div class="item__col-item">
                                <a href="#"><img src="<?php echo $themes_card['img']; ?>" alt="1"></a>
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
                            <span class="bold-letters"><?php echo $themes_card['name']; ?></span> &mdash; <?php echo $themes_card['desc']; ?>
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

    <?php get_footer(); ?>