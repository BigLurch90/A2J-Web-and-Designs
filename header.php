<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?></title>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <?php wp_head() ?>
</head>
<body class="bg-light-yellow font-lato text-base text-dark-green" <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <div class="flex flex-col items-center">
        <!-- Site-Header -->
        <header class="flex fixed justify-between w-full bg-gradient-to-tl from-light-green to-dark-green items-center py-4 px-8 top-0 left-0 z-10">
            <a href="page.php">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="A2J's logo">
            </a>
        
            <nav>
                <ul class="hidden sm:flex gap-4 text-light-yellow items-center">
                    <?php 
                        $args = array(
                            'container' => 'li',
                            'menu_class' => 'text-[18px] hover:scale-105 hover:text-golden-yellow transition-transform',
                        );
                        
                        wp_nav_menu( $args ); 
                        ?>


                    <li class="text-[18px] hover:scale-105 hover:text-golden-yellow transition-transform"><a href="page.php#about">Om oss</a></li>
                    <li class="text-[18px] hover:scale-105 hover:text-golden-yellow transition-transform"><a href="page.php#services">Tjänster</a></li>
                    <li><button class="open-form font-inconsolata button-border text-xl">Kontakta oss</button></li>
                </ul>
            </nav>

            <button id="toggle-menu" class="block sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-light-yellow">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>                  
            </button>
        </header>

        <!-- Tab menu -->
        <nav id="menu-bar">
            <ul class="text-light-yellow flex flex-col fixed py-8 px-6 z-10 gap-6 top-20 -right-52 transition-all bg-gradient-to-t to-light-green from-dark-green">
                <?php 
                    $args = array(
                        'container' => 'li',
                        'menu_class' => 'text-[18px] hover:scale-105 hover:text-golden-yellow transition-transform',
                    );
                    
                    wp_nav_menu( $args ); 
                ?>
                <li class="text-[18px] hover:scale-105 hover:text-golden-yellow transition-transform"><a href="page.php#about">Om oss</a></li>
                <li class="text-[18px] hover:scale-105 hover:text-golden-yellow transition-transform"><a href="page.php#services">Tjänster</a></li>
                <li><button class="open-form font-inconsolata button-border ">Kontakta oss</button></li>
            </ul>
        </nav>

        <!-- Contact form -->
        <div id="contact-form" class="hidden flex-col-reverse sm:flex-row fixed w-full h-full py-8 sm:py-24 px-4 xl:px-40 top-0 bottom-0 right-0 left-0 bg-dark-green bg-opacity-75 z-50">
            <form action="" class="shadow-frost-shadow flex flex-col justify-center px-16 lg:px-40 bg-dark-green bg-opacity-50 backdrop-blur-lg h-2/3 sm:h-full w-full sm:w-1/2 md:w-2/3 rounded-b-2xl sm:rounded-br-none sm:rounded-l-2xl text-light-yellow">
                <!-- <label class="mb-2 text-[18px]" for="name">Namn:</label>
                <input type="text" name="name" class="w-full h-8 bg-light-yellow outline-none text-dark-green font-lato font-bold pl-3 mb-6">
                <label class="mb-2 text-[18px]" for="email">Email:</label>
                <input type="text" name="email" class="w-full h-8 bg-light-yellow outline-none text-dark-green font-lato font-bold pl-3 mb-6">
                <label class="mb-2 text-[18px]" for="textarea">Förfrågan:</label>
                <textarea name="textarea" class="w-full h-16 bg-light-yellow outline-none text-dark-green font-lato font-bold pl-3 mb-6"></textarea>
                <input type="submit" value="Skicka" class="button-border font-inconsolata text-xl w-fit mt-2"> -->

                <?php echo do_shortcode( '[contact-form-7 id="8b8cffb" title="Kontaktformulär 1"]' ); ?>
            </form>

            <div class="flex flex-col justify-center items-center sm:items-start gap-6 px-8 text-light-yellow bg-gradient-to-tl from-light-green to-dark-green h-1/3 sm:h-full w-full sm:w-1/2 md:w-1/3 relative rounded-t-2xl sm:rounded-tl-none sm:rounded-r-2xl">
                <button id="close-form" class="flex absolute top-4 right-4 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-light-yellow hover:scale-105 hover:stroke-golden-yellow transition-transform">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg> 
                </button>

                <h3 class="font-inconsolata text-2xl">Vi vill gärna höra från dig!</h3>
                <div class="">
                    <p>Tveka inte att kontakta oss, oavsett vad ditt ärende är.</p>
                    <p>Vi svarar så snart vi kan.</p>
                </div>
                
                <figure class="w-full hidden sm:flex">
                    <svg viewBox="0 0 587 604" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 142.773C0 127.502 10.7912 114.358 25.7706 111.385L548.771 7.58728C568.559 3.65996 587 18.8008 587 38.9751V563.37C587 584.077 567.631 599.331 547.501 594.479L24.501 468.406C10.1282 464.941 0 452.082 0 437.297L0 142.773Z" fill="url(#paint0_linear_81_722)"/>
                        <path d="M417.013 496.983L456.754 437.266C456.754 437.266 426.264 454.651 420.887 474.292L437.617 430.048C437.617 430.048 420.805 443.26 415.143 468.761C409.482 494.262 417.013 496.983 417.013 496.983Z" fill="#E6E6E6"/>
                        <path d="M125.021 498.693L103 432.239C103 432.239 127.222 456.461 127.222 476.335L122.874 430.376C122.874 430.376 135.295 447.145 134.053 472.608C132.811 498.072 125.021 498.693 125.021 498.693Z" fill="#E6E6E6"/>
                        <path d="M468.726 529.359C468.763 573.074 382.061 559.627 275.916 559.719C169.772 559.81 84.3808 573.405 84.343 529.691C84.3053 485.976 170.976 476.393 277.121 476.302C383.265 476.21 468.688 485.644 468.726 529.359Z" fill="#E6E6E6"/>
                        <path d="M394.336 470.322H380.459L373.855 416.797H394.336V470.322Z" fill="#F09DA9"/>
                        <path d="M369.006 466.357H397.31V483.208H353.697V481.667C353.697 477.606 355.31 473.712 358.181 470.841C361.052 467.97 364.946 466.357 369.006 466.357Z" fill="#2F2E41"/>
                        <path d="M496.336 549.322H482.459L475.855 495.797H496.336V549.322Z" fill="#F09DA9"/>
                        <path d="M471.006 545.357H499.31V562.208H455.697V560.667C455.697 556.606 457.31 552.712 460.181 549.841C463.052 546.97 466.946 545.357 471.006 545.357Z" fill="#2F2E41"/>
                        <path d="M560.345 390.309C561.304 389.146 561.997 387.786 562.374 386.326C562.751 384.865 562.804 383.34 562.528 381.857C562.251 380.375 561.654 378.971 560.776 377.744C559.899 376.518 558.763 375.498 557.449 374.758L525.219 243.465L504.611 252.332L542.947 379.281C541.849 381.57 541.63 384.183 542.331 386.624C543.031 389.064 544.603 391.163 546.747 392.523C548.892 393.882 551.461 394.407 553.967 394C556.473 393.592 558.742 392.278 560.345 390.309Z" fill="#F09DA9"/>
                        <path d="M504.105 116.335C502.641 115.543 501.022 115.083 499.361 114.985C497.7 114.887 496.037 115.154 494.491 115.769C492.944 116.383 491.551 117.329 490.41 118.539C489.268 119.75 488.406 121.196 487.884 122.776L442.164 143.537L455.291 159.521L495.864 137.516C498.576 138.217 501.452 137.899 503.945 136.622C506.439 135.344 508.377 133.197 509.393 130.586C510.408 127.975 510.431 125.082 509.457 122.456C508.482 119.829 506.578 117.651 504.105 116.335Z" fill="#F09DA9"/>
                        <path d="M453 376.693L474.768 540.067L501.862 534.489C501.862 534.489 497.877 415.508 511.424 401.164C524.971 386.821 494 361.693 494 361.693L453 376.693Z" fill="#2F2E41"/>
                        <path d="M462 331.693L452 346.693C452 346.693 375 314.694 375 365.693C375 416.692 370.594 451.303 369 453.693C367.406 456.084 387.438 462.287 397 460.693C397 460.693 408.797 378.474 408 373.693C408 373.693 483.533 410.727 497.877 407.539C512.221 404.352 515.609 393.068 518 386.693C520.39 380.318 517 329.693 517 329.693L469.19 315.103L462 331.693Z" fill="#2F2E41"/>
                        <path d="M471.521 249.427L467.758 247.047C467.758 247.047 415.331 188.482 421.318 166.187C427.306 143.891 478.516 124.382 480.494 124.942C482.472 125.503 481.499 141.369 487.397 146.655C487.397 146.655 449.869 168.414 447.506 170.374C445.144 172.334 481.693 204.818 481.693 204.818L486.854 230.107L471.521 249.427Z" fill="#CCCCCC"/>
                        <path d="M519.215 206.289C519.215 206.289 489.572 209.709 488.432 209.709C487.292 209.709 486.722 202.298 486.722 202.298L460.499 238.212C460.499 238.212 447.58 342.403 451 340.693C454.42 338.983 517.505 348.805 518.075 344.244C518.645 339.684 517.505 316.881 519.215 315.741C520.926 314.601 548.859 243.913 548.859 243.913C548.859 243.913 546.008 229.091 536.317 223.961C526.626 218.83 519.215 206.289 519.215 206.289Z" fill="#CCCCCC"/>
                        <path d="M539.738 234.222L548.859 243.913C548.859 243.913 562.411 355.273 555 358.693C547.589 362.114 533 361.693 533 361.693L518.646 308.9L539.738 234.222Z" fill="#CCCCCC"/>
                        <path d="M490.73 199.236C505.221 199.236 516.968 187.489 516.968 172.998C516.968 158.506 505.221 146.759 490.73 146.759C476.238 146.759 464.491 158.506 464.491 172.998C464.491 187.489 476.238 199.236 490.73 199.236Z" fill="#F09DA9"/>
                        <path d="M484.573 177.092C484.218 171.647 477.35 171.461 471.894 171.409C466.438 171.358 459.915 171.553 456.828 167.054C454.788 164.081 455.178 159.954 456.863 156.766C458.549 153.579 461.321 151.127 464.049 148.769C471.09 142.68 478.347 136.639 486.801 132.742C495.255 128.845 505.161 127.27 513.929 130.399C524.699 134.242 539.258 154.024 540.515 165.39C541.772 176.756 537.23 188.343 529.573 196.836C521.916 205.33 504.391 201.903 493.362 204.924C500.067 195.435 495.648 178.192 484.907 173.76L484.573 177.092Z" fill="#2F2E41"/>
                        <path d="M260.5 526C285.077 526 305 506.077 305 481.5C305 456.923 285.077 437 260.5 437C235.923 437 216 456.923 216 481.5C216 506.077 235.923 526 260.5 526Z" fill="#004643"/>
                        <path d="M243.722 94.6235C263.413 110.456 276.275 129.626 282.306 152.134C286.578 168.078 286.923 183.314 283.34 197.844C279.758 212.374 272.663 229.604 262.056 249.534C252.68 266.621 246.603 282.071 243.825 295.882C240.922 309.225 239.922 321.304 240.826 332.118C242.07 342.34 244.652 358.485 248.571 380.553C251.461 391.339 249.878 400.307 243.82 407.458C237.637 414.141 230.593 418.542 222.688 420.66C201.764 426.266 187.909 416.409 181.124 391.087C177.48 377.488 175.471 360.687 175.094 340.685C174.718 320.682 177.855 297.979 184.504 272.576C186.679 263.952 190.016 255.016 194.515 245.769C199.479 236.397 202.577 230.29 203.809 227.447C209.113 217.482 213.191 207.594 216.044 197.783C218.772 187.503 219.256 179.08 217.497 172.515C215.487 165.013 212.754 159.463 209.298 155.865C206.307 152.143 202.028 148.264 196.461 144.227C188.532 138.813 179.119 135.304 168.224 133.7C157.328 132.096 147.696 132.416 139.326 134.658C125.842 138.271 113.978 144.215 103.736 152.487C93.8327 160.167 86.4618 168.927 81.623 178.767C77.1236 188.014 75.9419 196.624 78.0779 204.595C81.596 217.725 86.792 226.887 93.6659 232.082C100.414 236.807 104.479 241.749 105.861 246.907C106.615 249.721 106.797 253.19 106.408 257.315C104.346 271.94 96.5728 281.059 83.0883 284.672C65.884 289.282 51.5704 286.081 40.1476 275.069C28.7248 264.058 20.3119 248.47 14.9091 228.306C9.75756 209.081 10.9021 189.173 18.3427 168.584C25.6577 147.525 39.4319 128.254 59.6655 110.77C79.8991 93.2867 106.058 80.2464 138.142 71.6496C156.741 66.6659 175.309 66.214 193.845 70.2939C212.255 73.9048 228.881 82.0147 243.722 94.6235Z" fill="#004643"/>
                        <defs>
                        <linearGradient id="paint0_linear_81_722" x1="293.5" y1="0" x2="293.5" y2="604" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EFDE5F" stop-opacity="0.738636"/>
                        <stop offset="1" stop-color="#FFE208"/>
                        </linearGradient>
                        </defs>
                        </svg>
                        
                </figure>
            </div>
        </div>

        <!-- G-translate -->
        <div class="flex fixed bottom-4 right-4 z-50">
            <?php echo do_shortcode('[gtranslate]'); ?>
        </div>