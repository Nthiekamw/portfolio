<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <!-- <php wp_body_open(); ?> -->

    <header>
        <div class="logo-container">
            <div class="logo">
                <?php echo the_custom_logo(); ?>
                <h1>Dev-NthiekamE</h1>
            </div>
        </div>

        <!-- Menu de navigation -->
          <nav id="site-navigation" class="navbar">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'nav__links',
            ));
            ?>
        </nav>
        <button id="showPdfButton">Voir mon cv</button> 

        <div id="pdfContainer" style="display:none; margin-top:10px;">
             <iframe src="<?php echo "get_template_directory_uri"(); ?>/CVwilliam.pdf" width="400" height="200" style="border:none;"></iframe> 
        </div>
        

        <div class="icon-btn-menu">
            <img id="icon-menu" onclick="open_menu()" src="<?php echo get_stylesheet_directory_uri() ?>/images/menu.png" alt="menu-open">
            <img id="icon-close" onclick="close_menu()" src="<?php echo get_stylesheet_directory_uri() ?>/images/close.png" alt="menu-close">
        </div>
        
        <script>
         document.getElementById("showPdfButton").onclick = function() {
             var pdfContainer = document.getElementById("pdfContainer");
              pdfContainer.style.display = pdfContainer.style.display === "none" ? "block" : "none"; };
         </script>
    </header>