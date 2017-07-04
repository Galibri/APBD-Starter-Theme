<?php global $apbd; ?> 
    <div class="mobile-header">
        <div class="container">
            <div class="row">
                <div class="apbd_col-half">
                    <?php if($apbd['apbd-mobile-logo']['url'] != null){ ?>
                        <h2 class="mobile-logo"><a href=""><img src="<?php echo $apbd['apbd-mobile-logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <?php } else { ?>
                        <h2 class="not-sticky-logo"><a href=""><img src="<?php echo $apbd['apbd_main_logo']['url']; ?>" alt="Logoimg"></a></h2>
                    <?php } ?>
                </div>
                <div class="apbd_col-half">
                    <a href="#" class="apbd-menu-btn"><i class="fa fa-bars"></i></a>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'mobile-menu' ) ); ?>
            </div>
        </div>
    </div>