        <!-- Site-Footer -->
        <footer class="flex w-full flex-col relative py-20 px-8 justify-between items-center gap-8 bg-gradient-to-tl from-light-green to-dark-green">
            <div class="flex flex-col sm:flex-row w-full justify-between items-start gap-4 sm:gap-0">
                <div class="text-light-yellow mb-8">
                    <a href="page.php" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="A2J's logo" class="mb-8">
                    </a>
                    <p class="mb-4">E-mail:</p>
                    <p class="mb-8">info@a2jwebdesigns.com</p>
    
                    <p class="mb-4">Sociala medier:</p>
                    <ul>
                        <li>
                            <a href="https://www.linkedin.com/in/jonas-johansson-a641b3304/">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.3333 0C22.0406 0 22.7189 0.280951 23.219 0.781048C23.719 1.28115 24 1.95942 24 2.66667V21.3333C24 22.0406 23.719 22.7189 23.219 23.219C22.7189 23.719 22.0406 24 21.3333 24H2.66667C1.95942 24 1.28115 23.719 0.781048 23.219C0.280951 22.7189 0 22.0406 0 21.3333V2.66667C0 1.95942 0.280951 1.28115 0.781048 0.781048C1.28115 0.280951 1.95942 0 2.66667 0H21.3333ZM20.6667 20.6667V13.6C20.6667 12.4472 20.2087 11.3416 19.3936 10.5264C18.5784 9.71128 17.4728 9.25333 16.32 9.25333C15.1867 9.25333 13.8667 9.94667 13.2267 10.9867V9.50667H9.50667V20.6667H13.2267V14.0933C13.2267 13.0667 14.0533 12.2267 15.08 12.2267C15.5751 12.2267 16.0499 12.4233 16.3999 12.7734C16.75 13.1235 16.9467 13.5983 16.9467 14.0933V20.6667H20.6667ZM5.17333 7.41333C5.76742 7.41333 6.33717 7.17733 6.75725 6.75725C7.17733 6.33717 7.41333 5.76742 7.41333 5.17333C7.41333 3.93333 6.41333 2.92 5.17333 2.92C4.57571 2.92 4.00257 3.1574 3.57999 3.57999C3.1574 4.00257 2.92 4.57571 2.92 5.17333C2.92 6.41333 3.93333 7.41333 5.17333 7.41333ZM7.02667 20.6667V9.50667H3.33333V20.6667H7.02667Z" fill="#FAF4D3"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="text-light-yellow flex flex-col gap-8">
                    <h4 class="font-inconsolata text-xl">Snabb länkar:</h4>
                    <nav>
                        <ul class="flex flex-col gap-6">
                            <?php 
                                $args = array(
                                    'container' => 'li',
                                    'menu_class' => 'hover:scale-105 hover:text-golden-yellow transition-transform',
                                );
                                
                                wp_nav_menu( $args ); 
                            ?>
                            <li class="hover:scale-105 hover:text-golden-yellow transition-transform"><a href="page.php#about">Om oss</a></li>
                            <li class="hover:scale-105 hover:text-golden-yellow transition-transform"><a href="page.php#services">Tjänster</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="bg-light-yellow h-[2px] w-full"></div>

            <div class="flex flex-col sm:flex-row w-full justify-between items-start sm:items-center text-light-yellow gap-4 sm:gap-0">
                <p>Copyright © 2024 A2J Web & Designs. Alla rättigheter förbehållna.</p>
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
                    <a href="" class="underline hover:scale-105 hover:text-golden-yellow transition-transform">Integritetspolicy</a>
                    <a href="" class="underline hover:scale-105 hover:text-golden-yellow transition-transform">Cookiepolicy</a>
                </div>
            </div>

        </footer>

    </div>

    <?php wp_footer(); ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>