    <?php global $apbd; 
        if($apbd['apbd-sub-header'] == '1'){ ?>
        <div class="sub-header">
            <div class="container">
                <div class="row">
                   <?php if($apbd['apbd-page-title'] == '1'){ ?>
                    <div class="col-md-6">
                        <h3 class="sub-header-title"><?php the_title(); ?></h3>
                    </div>
                    <?php } ?>
                    <?php if($apbd['apbd-breadcrumb'] == '1' && $apbd['apbd-page-title'] == '1'){ ?>
                    <div class="col-md-6">
                        <?php if(function_exists(custom_breadcrumbs())){
                            custom_breadcrumbs();
                        } ?>
                    </div>
                    <?php }
                    if($apbd['apbd-breadcrumb'] == '1' && $apbd['apbd-page-title'] != '1'){ ?>
                    <div class="col-md-12">
                        <?php if(function_exists(custom_breadcrumbs())){
                            custom_breadcrumbs();
                        } ?>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    <?php } ?>