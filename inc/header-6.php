  <?php global $apbd; ?>
            <div class="row header-6">
                <div class="col-md-12">
                    <h2 class="not-sticky-logo"><a href=""><img src="<?php echo $apbd['apbd_main_logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <h2 class="sticky-logo"><a href=""><img src="<?php echo $apbd['apbd-sticky-logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <h2 class="mobile-logo"><a href=""><img src="<?php echo $apbd['apbd-mobile-logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <h2 class="ratina-logo"><a href=""><img src="<?php echo $apbd['apbd-ratina-logo']['url']; ?>" alt="Logoimg"></a></h2>
                </div>
                <div class="col-md-12" role="banner">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        </div>