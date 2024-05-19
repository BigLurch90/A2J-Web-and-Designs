<?php // Template Name: Portfolio ?>

<?php get_header(); ?>

        <!-- Next and Prev button -->
        <div  class="flex z-40 justify-between w-full sticky top-1/2 px-0">
            <button data-aos="fade-up" data-aos-delay="200" id="prev" class="flex justify-center items-center sticky top-96 left-0 z-10 bg-golden-yellow rounded-r-full rounded-l-none w-8 h-12 hover:bg-dark-green ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-12 stroke-dark-green hover:stroke-light-yellow">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button data-aos="fade-up" data-aos-delay="200" id="next" class="flex justify-center items-center sticky top-96 right-0 z-10 bg-golden-yellow rounded-l-full rounded-r-none w-8 h-12 hover:bg-dark-green">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-12 stroke-dark-green hover:stroke-light-yellow">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>                  
            </button>
        </div>
        
        <!-- Portfolio Section -->
        <main class="flex flex-col w-full items-center justify-center pt-8 pb-20 px-8">

            

            <!-- Project -->
            <?php 
                $args = [
                    'post_type' => 'post',
                ];
                    
                $query = new WP_Query($args);
                    
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="project hidden flex-col items-center w-full">
                    

                      <?php 
                        if (get_field('portfolio_image')) {

                          $image = get_field('portfolio_image');
                          $url = $image['url'];


                        } 

                      ?>
                        <h2 class="font-inconsolata text-4xl sm:text-5xl mb-6 font-bold"><?php the_title(); ?></h2>

                        <figure class="max-w-[1440px] w-full flex flex-col mb-4">
                            <img src="<?php echo $url; ?>" alt="<?php echo get_field('portfolio_image_alt'); ?>" class="object-cover object-top h-[300px] sm:h-[400px] lg:h-[600px]">
                        </figure>
                        <div class="flex felx-col items-center justify-center h-fit sticky top-32">
                            <div class="flex flex-col max-w-[1440px] items-center text-center">
                                <p><?php the_content(); ?></p>
                                
                                <button class="button-dark font-inconsolata text-xl stroke-light-yellow hover:stroke-dark-green mb-24 mt-12">
                                    <a href="<?php echo get_field('portfolio_link');?>" class="flex items-center gap-6">
                                        Se Project 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg> 
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>


                <!-- <figure class="w-full flex flex-col gap-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sole-society-landing-page.webp" alt="Image of Sole Societys landing page" class="object-cover object-top h-[300px] sm:h-[400px] lg:h-[600px]">
                    
                </figure>
    
                <div class="flex felx-col h-fit sticky top-32">
                
                    <div class="max-w-[1440px]">
                        <h2 class="font-inconsolata text-4xl sm:text-5xl mb-6">Sole Society</h2>
                        <p class="mb-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias quidem modi, fuga omnis labore. Omnis error vel quidem. Architecto et provident, autem optio neque qui consectetur facere quas dolorum quidem modi obcaecati minus harum quis consequatur doloremque placeat sint! <br><br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis porro amet eaque nisi doloribus consequatur magni repellendus quisquam at sequi nemo cumque, quod, harum corporis aliquam blanditiis! Maxime doloribus culpa fugit consequatur enim mollitia libero officia laborum, quae eveniet necessitatibus excepturi quis minima eos natus. Perspiciatis ipsum blanditiis magnam ipsa natus sapiente? Autem non deleniti suscipit repudiandae natus similique accusamus. <br> <br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis porro amet eaque nisi doloribus consequatur magni repellendus quisquam at sequi nemo cumque, quod, harum corporis aliquam blanditiis! Maxime doloribus culpa fugit consequatur enim mollitia libero officia laborum, quae eveniet necessitatibus excepturi quis minima eos natus. Perspiciatis ipsum blanditiis magnam ipsa natus sapiente? Autem non deleniti suscipit repudiandae natus similique accusamus.</p>
                        <button class="button-dark font-inconsolata text-xl stroke-light-yellow hover:stroke-dark-green mb-24">
                            <a href="" class="flex items-center gap-6">
                                Se Project 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg> 
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="project hidden flex-col gap-8 sm:gap-10 lg:gap-16 items-center">
                <figure class="w-full flex flex-col gap-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/auto-city-home-page.webp" alt="Image of Auto City landing page" class="object-cover object-top h-[300px] sm:h-[400px] lg:h-[600px]">
                    
                </figure>
    
                <div class="flex felx-col h-fit sticky top-32">
                
                    <div class="max-w-[1440px]">
                        <h2 class="font-inconsolata text-4xl sm:text-5xl mb-6">Auto City</h2>
                        <p class="mb-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias quidem modi, fuga omnis labore. Omnis error vel quidem. Architecto et provident, autem optio neque qui consectetur facere quas dolorum quidem modi obcaecati minus harum quis consequatur doloremque placeat sint! <br><br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis porro amet eaque nisi doloribus consequatur magni repellendus quisquam at sequi nemo cumque, quod, harum corporis aliquam blanditiis! Maxime doloribus culpa fugit consequatur enim mollitia libero officia laborum, quae eveniet necessitatibus excepturi quis minima eos natus. Perspiciatis ipsum blanditiis magnam ipsa natus sapiente? Autem non deleniti suscipit repudiandae natus similique accusamus. <br> <br>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis porro amet eaque nisi doloribus consequatur magni repellendus quisquam at sequi nemo cumque, quod, harum corporis aliquam blanditiis! Maxime doloribus culpa fugit consequatur enim mollitia libero officia laborum, quae eveniet necessitatibus excepturi quis minima eos natus. Perspiciatis ipsum blanditiis magnam ipsa natus sapiente? Autem non deleniti suscipit repudiandae natus similique accusamus.</p>
                        <button class="button-dark font-inconsolata text-xl stroke-light-yellow hover:stroke-dark-green mb-24">
                            <a href="" class="flex items-center gap-6">
                                Se Project 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg> 
                            </a>
                        </button>
                    </div>
                </div>
            </div> -->

        </main>

<?php get_footer(); ?>