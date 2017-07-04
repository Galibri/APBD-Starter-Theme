 <?php global $apbd; ?>
    <div class="header-top">
        <div class="<?php if($apbd['apbd-fullwidth-header'] == '1'){echo 'container-fluid';} else{echo 'container';} ?>">
            <div class="row">
                <div class="col-md-8">
                  <?php if($apbd['apbd-top-bar-left'] == '1') { ?>
                       <div class="header-top-left">
                           <?php if($apbd['apbd-top-bar-left-title'] != '') { ?>
                                <span class="margin-right-20"><?php echo $apbd['apbd-top-bar-left-title']; ?></span>
                            <?php } ?>
                            <?php if($apbd['apbd-top-bar-left-phone'] != '') { ?>
                                <a href="callto:<?php echo $apbd['apbd-top-bar-left-phone']; ?>"><i class="fa fa-phone"></i> <?php echo $apbd['apbd-top-bar-left-phone']; ?></a>
                            <?php } ?>
                            <?php if($apbd['apbd-top-bar-left-email'] != '') { ?>
                                <a href="mailto:<?php echo $apbd['apbd-top-bar-left-email']; ?>"> <i class="fa fa-envelope"></i> <?php echo $apbd['apbd-top-bar-left-email']; ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                   <?php if($apbd['apbd-top-bar-right'] == '1') { ?>
                        <div class="top-nav">
                          <?php if($apbd['apbd-top-bar-right-content'] == '1'){
                                wp_nav_menu( array( 'theme_location' => 'menu-top', 'menu_id' => 'top-menu' ) );
                            } elseif($apbd['apbd-top-bar-right-content'] == '2') { ?> 
                                <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            <?php } elseif($apbd['apbd-top-bar-right-content'] == '3'){
                                echo $apbd['apbd-custom-shortcode-top'];
                            } elseif($apbd['apbd-top-bar-right-content'] == '4'){ ?>
                               <?php if($apbd['apbd-social-facebook'] != null){ ?>
                                    <a href="<?php echo $apbd['apbd-social-facebook']; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></i></a>
                                <?php } ?>
                                
                                <?php if($apbd['apbd-social-twitter'] != null){ ?>
                                    <a href="<?php echo $apbd['apbd-social-twitter']; ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></i></a>
                                <?php } ?>
                                
                                <?php if($apbd['apbd-social-youtube'] != null){ ?>
                                     <a href="<?php echo $apbd['apbd-social-youtube']; ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></i></a>
                                <?php } ?>
                                
                                <?php if($apbd['apbd-social-googleplus'] != null){ ?>
                                    <a href="<?php echo $apbd['apbd-social-googleplus']; ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></i></a>
                                <?php } ?>
                                
                                <?php if($apbd['apbd-social-instagram'] != null){ ?>
                                    <a href="<?php echo $apbd['apbd-social-instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                                <?php } ?>
                                
                                <?php if($apbd['apbd-social-linkedin'] != null){ ?>
                                    <a href="<?php echo $apbd['apbd-social-linkedin']; ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a>
                                <?php } ?>
                                
                                <?php if($apbd['apbd-social-reddit'] != null){ ?>
                                    <a href="<?php echo $apbd['apbd-social-reddit']; ?>"><i class="fa fa-reddit-square" aria-hidden="true"></i></i></a>
                                <?php } ?>
                                
                                <?php if($apbd['apbd-social-dribble'] != null){ ?>
                                    <a href="<?php echo $apbd['apbd-social-dribble']; ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></i></a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                   <?php } ?>
                </div>
            </div>
        </div>
    </div>