<?php
/*
*    Dynamic css output
*/

global $apbd;
?>

<style type="text/css">
body {
    background-color: <?php echo $apbd['apbd-website-background']['background-color']; ?>; 
    background-image: url(<?php echo $apbd['apbd-website-background']['background-image']; ?>); 
    background-repeat: <?php echo $apbd['apbd-website-background']['background-repeat']; ?>;
    background-position: <?php echo $apbd['apbd-website-background']['background-position']; ?>;
    background-size: <?php echo $apbd['apbd-website-background']['background-size']; ?>;
    background-attachment: <?php echo $apbd['apbd-website-background']['background-attachment']; ?>;
    color: <?php echo $apbd['apbd-default-content']['color']; ?>;
    font-style: <?php echo $apbd['apbd-default-content']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-default-content']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-default-content']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-default-content']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-default-content']['text-align']; ?>;
}
.header, .header-main, .mobile-header {
    background: <?php echo $apbd['apbd-header-background']['rgba']; ?>;
    color: <?php echo $apbd['apbd-header-fonts']['color']; ?>;
    font-style: <?php echo $apbd['apbd-header-fonts']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-header-fonts']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-header-fonts']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-header-fonts']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-header-fonts']['text-align']; ?>;
}
.sticky, .sticky .header-main{
    height: <?php echo $apbd['apbd-sticky-header-height']; ?>px;
}
.header-main{
    background: <?php echo $apbd['apbd-menu-background']['rgba']; ?>;
    height: <?php echo $apbd['apbd-header-height']; ?>px;
}    
    <?php if($apbd['apbd-global-layout'] == '1'){ ?>
        div#page {
            width: 100%;
        }
    <?php } 
    if($apbd['apbd-global-layout'] == '2' || $apbd['apbd-global-layout'] == '3'){ ?>
        div#page {
            width: <?php echo $apbd['apbd-grid-width']; ?>px;
            margin: 0 auto;
            border: 5px solid #696969;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 4px #000;
        } 
    <?php } 
    if($apbd['apbd-global-layout'] == '3'){ ?>
        div#page {
            margin-top: 30px;
        }
    <?php }
    
if($apbd['apbd-header-layout'] == '1' || $apbd['apbd-header-layout'] == '9' || $apbd['apbd-header-layout'] == '10'){ ?>
    body.home .header, body.home .header-main, body.home .header-top {
        background: transparent;
    }
    .header-main{
        position: relative;
        z-index: 222;
    }
    body.home #content.container {
        margin-top: -<?php echo $apbd['apbd-header-height']; ?>px;
        z-index: 111;
    }
body.home .sticky, body .sticky {
    background: <?php echo $apbd['apbd-sticky-header-background']['rgba']; ?>;
}
<?php }
if($apbd['apbd-header-layout'] == '2'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '3' || $apbd['apbd-menu-item-border'] == '1'){ ?>
    ul#primary-menu li {
        border-right: 1px solid #ccc;
    }
    ul#primary-menu li:nth-last-child(1) {
        border-right: 0px solid #ccc;
    }
    
<?php }
if($apbd['apbd-header-layout'] == '4'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '5'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '6'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '7'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '8'){ ?>
    .menu-right-menu-container ul#primary-menu {
        float: left;
    }
    .menu-left-menu-container ul#primary-menu {
        float: right;
    }
    .header-main a img {
        margin: auto;
    }
<?php }
if($apbd['apbd-header-layout'] == '9'){ ?>
    .menu-right-menu-container ul#primary-menu {
        float: left;
    }
    .menu-left-menu-container ul#primary-menu {
        float: right;
    }
    .header-main a img {
        margin: auto;
    }
<?php }
if($apbd['apbd-header-layout'] == '10'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '11'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '12'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '13'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '14'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '15'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '16'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '17'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '18'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '19'){ ?>
    
<?php }
if($apbd['apbd-header-layout'] == '20'){ ?>
    
<?php } 
 
if($apbd['apbd-top-bar-right'] != '1' && $apbd['apbd-top-bar-left'] != '1') { ?>
    .header-top{display: none;}
<?php }
    
?>

.menu-side {
    bottom: <?php echo $apbd['apbd-sticky-menu-top']; ?>%;
    <?php if($apbd['apbd-sticky-left-menu'] == '1'){ ?>
    left: 15px;
    display: block;
    transform-origin: left;
    transform: rotate(-90deg);
    <?php } 
    if($apbd['apbd-sticky-right-menu'] == '1') { ?>
    left: auto;
    right: 15px;
    display: block;
    transform-origin: right;
    transform: rotate(90deg);
    <?php } ?>
}
@media only screen and (max-width: 767px){
    <?php if($apbd['apbd-sticky-menu-enable'] != '1'){ ?>
        .menu-side{
            display: none;
        } 
    <?php } ?>
}
#content {
    background-color: <?php echo $apbd['apbd-content-background']['background-color']; ?>; 
    background-image: url(<?php echo $apbd['apbd-content-background']['background-image']; ?>); 
    background-repeat: <?php echo $apbd['apbd-content-background']['background-repeat']; ?>;
    background-position: <?php echo $apbd['apbd-content-background']['background-position']; ?>;
    background-size: <?php echo $apbd['apbd-content-background']['background-size']; ?>;
    background-attachment: <?php echo $apbd['apbd-content-background']['background-attachment']; ?>;
}
.header-top-left a, ul#top-menu li a, .header-top-left span, .top-nav .fa {
    color: <?php echo $apbd['apbd-header-link-color']; ?>;
}
.header-top-left a:hover, ul#top-menu li a:hover {
    color: <?php echo $apbd['apbd-header-link-hover-color']; ?>;
}
<?php if($apbd['apbd-menu-style'] == '1') { ?>
    ul#primary-menu.menu li.current-menu-item a:after, ul#primary-menu.menu > li:hover a:after {
        content: '';
        width: 80%;
        height: 3px;
        background: #fff;
        display: block;
        top: 0;
        left: 10%;
        position: absolute;
    }
<?php } ?>
<?php if($apbd['apbd-menu-style'] == '2') { ?>
    ul#primary-menu.menu li.current-menu-item a:after, ul#primary-menu.menu > li:hover a:after {
        content: '';
        width: 80%;
        height: 3px;
        background: #fff;
        display: block;
        bottom: 0;
        left: 10%;
        position: absolute;
    }
<?php } ?>
<?php if($apbd['apbd-menu-style'] == '3') { ?>
    ul#primary-menu li a:hover {
        color: <?php echo $apbd['apbd-menu-link-hover-color']; ?>;
        background: <?php echo $apbd['apbd-active-menu-backgrond-color']; ?>;
    }
    ul#primary-menu li.current-menu-item a {
        color: <?php echo $apbd['apbd-active-menu-link-color']; ?>;
        background: <?php echo $apbd['apbd-active-menu-backgrond-color']; ?>;
    }
<?php }
if($apbd['apbd-menu-position'] == '1') { ?>
    ul#primary-menu {
        float: left;
    }
<?php }
if($apbd['apbd-menu-position'] == '2') { ?>
    ul#primary-menu {
        float: right;
    }
<?php }
if($apbd['apbd-menu-position'] == '3') { ?>
    ul#primary-menu {
        float: none;
        display: table;
        margin: auto;
    }
<?php } ?>
ul#primary-menu li a, ul#primary-menu li.fa:before {
    color: <?php echo $apbd['apbd-menu-link-typography']['color']; ?>;
    font-style: <?php echo $apbd['apbd-menu-link-typography']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-menu-link-typography']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-menu-link-typography']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-menu-link-typography']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-menu-link-typography']['text-align']; ?>;
}
.main-navigation ul ul, .main-navigation ul ul ul, .main-navigation ul ul ul ul {
    background: <?php echo $apbd['apbd-submenu-background']; ?>;
}
.main-navigation ul ul a {
    color: <?php echo $apbd['apbd-submenu-link-color']; ?>;
    background: <?php echo $apbd['apbd-submenu-link-hover-color']; ?>;
}
h1 {
    color: <?php echo $apbd['apbd-h1-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h1-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h1-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h1-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h1-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h1-typo']['text-align']; ?>;
}
h2 {
    color: <?php echo $apbd['apbd-h2-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h2-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h2-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h2-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h2-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h2-typo']['text-align']; ?>;
}
h3 {
    color: <?php echo $apbd['apbd-h3-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h3-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h3-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h1-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h3-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h3-typo']['text-align']; ?>;
}
h4 {
    color: <?php echo $apbd['apbd-h4-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h4-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h4-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h4-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h4-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h4-typo']['text-align']; ?>;
}
h5 {
    color: <?php echo $apbd['apbd-h5-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h5-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h5-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h5-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h5-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h5-typo']['text-align']; ?>;
}
h6 {
    color: <?php echo $apbd['apbd-h6-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h6-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h6-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h6-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h6-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h6-typo']['text-align']; ?>;
}
h1.page-title {
    color: <?php echo $apbd['apbd-h1-page-title-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h1-page-title-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h1-page-title-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h1-page-title-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h1-page-title-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h1-page-title-typo']['text-align']; ?>;
}
h2.page-title {
    color: <?php echo $apbd['apbd-h2-page-title-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-h2-page-title-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-h2-page-title-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-h2-page-title-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-h2-page-title-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-h2-page-title-typo']['text-align']; ?>;
}
.blog-title {
    color: <?php echo $apbd['apbd-blog-title-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-blog-title-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-blog-title-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-blog-title-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-blog-title-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-blog-title-typo']['text-align']; ?>;
}
body.page {
    color: <?php echo $apbd['apbd-page-content-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-page-content-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-page-content-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-page-content-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-page-content-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-page-content-typo']['text-align']; ?>;
}
body.blog, body.single-post {
    color: <?php echo $apbd['apbd-blog-content-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-blog-content-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-blog-content-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-blog-content-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-blog-content-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-blog-content-typo']['text-align']; ?>;
}
footer.site-footer {
    background-color: <?php echo $apbd['apbd-footer-background']['background-color']; ?>; 
    background-image: url(<?php echo $apbd['apbd-footer-background']['background-image']; ?>); 
    background-repeat: <?php echo $apbd['apbd-footer-background']['background-repeat']; ?>;
    background-position: <?php echo $apbd['apbd-footer-background']['background-position']; ?>;
    background-size: <?php echo $apbd['apbd-footer-background']['background-size']; ?>;
    background-attachment: <?php echo $apbd['apbd-footer-background']['background-attachment']; ?>;
}
.widget{
    color: <?php echo $apbd['apbd-widget-content-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-widget-content-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-widget-content-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-widget-content-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-widget-content-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-widget-content-typo']['text-align']; ?>;
}
.widget-title{
    color: <?php echo $apbd['apbd-widget-title-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-widget-title-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-widget-title-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-widget-title-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-widget-title-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-widget-title-typo']['text-align']; ?>;
}
footer .widget{
    color: <?php echo $apbd['apbd-content-footer-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-content-footer-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-content-footer-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-content-footer-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-content-footer-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-content-footer-typo']['text-align']; ?>;
}
footer .widget-title{
    color: <?php echo $apbd['apbd-title-footer-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-title-footer-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-title-footer-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-title-footer-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-title-footer-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-title-footer-typo']['text-align']; ?>;
}

.footer-bottom {
    background: <?php echo $apbd['apbd-footer-copyright-background']; ?>;
    color: <?php echo $apbd['apbd-footer-typo']['color']; ?>;
    font-style: <?php echo $apbd['apbd-footer-typo']['font-style']; ?>;
    font-family: <?php echo $apbd['apbd-footer-typo']['font-family']; ?>;
    font-size: <?php echo $apbd['apbd-footer-typo']['font-size']; ?>;
    line-height: <?php echo $apbd['apbd-footer-typo']['line-height']; ?>;
    text-align: <?php echo $apbd['apbd-footer-typo']['text-align']; ?>;
}
.footer-top {
    background: <?php echo $apbd['apbd-footer-top-background']; ?>;
}
</style>