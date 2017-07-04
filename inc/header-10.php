  <?php global $apbd; ?>
            <div class="row">
                <div class="col-md-3">
                    <h2 class="not-sticky-logo"><a href=""><img src="<?php echo $apbd['apbd_main_logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <h2 class="sticky-logo"><a href=""><img src="<?php echo $apbd['apbd-sticky-logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <h2 class="mobile-logo"><a href=""><img src="<?php echo $apbd['apbd-mobile-logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <h2 class="ratina-logo"><a href=""><img src="<?php echo $apbd['apbd-ratina-logo']['url']; ?>" alt="Logoimg"></a></h2>
                </div>
                <div class="col-md-9" role="banner">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <a href="" class="apbd-menu-btn expand-block-menu"><i class="fa fa-bars"></i></a>
                        <a href="" class="remove-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <div class="block-page-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'fullpage-menu' ) ); ?>
                        </div>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        </div>