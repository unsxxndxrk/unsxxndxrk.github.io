<footer id="footer" class="footer">
        <div class="container">
            <div class="footer__wrapper d-flex">
                <div class="footer__logo">
                    <img src="<?php echo TB_IMG_DIR; ?>logo.PNG" alt="logo">
                </div>
                <div class="footer__nav">
                    <div class="footer__nav-menus d-flex">
                       
                        <?php wp_nav_menu( array('footer_menu' => 'Меню в подвале') ); ?>
                        
                        <ul class="footer__nav_2 footer__menu-list"> 
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Hosting</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">Custom</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                        </ul>
                        <ul class="footer__nav_3 footer__menu-list"> 
                            <li>
                                <a href="#">Twitter <span>&rarr;</span></a>
                            </li>
                            <li>
                                <a href="#">Facebook <span>&rarr;</span></a>
                            </li>
                            <li>
                                <a href="#">Pinterest <span>&rarr;</span></a>
                            </li>
                            <li>
                                <a href="#">Dribble <span>&rarr;</span></a>
                            </li>
                        </ul>
                        <ul class="footer__nav_4 footer__menu-list"> 
                            <li>
                                <a href="#">Someone's Blog</a>
                            </li>
                            <li>
                                <a href="#">Login Designer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__rights">
                        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</body>
</html>