<?php
// wp_enqueue_style('swiper-styles', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
// wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);
// wp_enqueue_script('swiper-init', get_template_directory_uri() . '/blocks/slider/swiper-init.js', array(), null, true);


wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', array(), null);
wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), null, true);
wp_enqueue_script('fancybox-auto', 'https://cdnjs.cloudflare.com/ajax/libs/fancyapps-ui/4.0.26/carousel.autoplay.umd.min.js', array(), null, true);
wp_enqueue_script('fancy-init', get_template_directory_uri() . '/blocks/slider/fancy-init.js', array(), null, true);

?>

<section class="relative" id="<?= get_row_layout() ?>">

    <!-- Carousel -->
    <div class="w-full mx-auto">
        <div class="swiper-container loading overflow-hidden">
            <div class="carousel">
                <?php while (have_rows('slide')) : the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');
                    ?>
                    <div class="carousel__slide !w-full !p-0">
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" class="w-full object-cover aspect-gold max-h-[70vh]" />
                        </a>

                    </div>
                <?php endwhile; ?>
            </div>

            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination !-bottom-[40px]"></div> -->
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev swiper-button-white hidden"></div>
            <div class="swiper-button-next swiper-button-white hidden"></div> -->
        </div>
    </div>


</section>