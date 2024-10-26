<?php wp_footer(); ?>


<footer>
        <div class="footer-content">
            <!-- Réseaux sociaux à gauche -->
            <div class="social-media" >
                <a href="https://www.facebook.com">
                    <img src="<?php echo get_template_directory_uri() ?>/images/face.png" alt="Facebook">
                </a>
                    
            
                <a href="https://www.linkedin.com">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ind.jpeg" alt="linkedin"></a>

                <a href="https://www.instagram.com">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/insta.png" alt="instagram"></a>

                <a href="https://www.TikTok.com">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tiktok.png" alt="Tiktok"></a>
            </div>

            <!-- Informations de contact et localisation à droite -->
            <div class="contact-info">
                <p><strong></strong> 21 Avenue de l'abreuvoir, la celle saint cloud, France</p>
                <p><strong>Téléphone :</strong> +33 6 15 01 36 94</p>
                <p><strong>Email :</strong> williamnthiekam392@gmail.com</p>
                <p><a href="https://www.linkedin.com/in/william-nthiekam-05b3b3280/" target="_blank">LinkedIn</a> | <a href="https://github.com/Nthiekamw" target="_blank">GitHub</a></p>
            </div>
        </div>

        <!-- Bas du footer : mentions légales et droits d'auteur -->
        <div class="footer-bottom">
            <p>&copy; 2024 Web NTH. Tous droits réservés.</p>
            <p><a href="mentions-legales.html">Mentions légales</a>|<a href="plan-du-site.html">Plan du site</a></p>
        </div>
    </footer>

    <script>
    const menu = document.querySelector('.navbar');
    // const navBtn = document.querySelector('.nav-btn');
    const open = document.getElementById('icon-menu');
    const close = document.getElementById('icon-close');
    function open_menu() {
        menu.style.display = "block";
        // navBtn.style.display = "block";
        close.style.display = "block";
        open.style.display = "none";
    }

    function close_menu() {
        menu.style.display = "none";
        // navBtn.style.display = "none";
        close.style.display = "none";
        open.style.display = "block";
    }
    </script>

</body>
</html>