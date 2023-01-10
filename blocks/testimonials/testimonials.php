<?php
// wp_enqueue_style('swiper-styles', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
// wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);
// wp_enqueue_script('swiper-init', get_template_directory_uri() . '/blocks/slider/swiper-init.js', array(), null, true);


wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', array(), null);
wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), null, true);
// wp_enqueue_script('fancybox-auto', 'https://cdnjs.cloudflare.com/ajax/libs/fancyapps-ui/4.0.26/carousel.autoplay.umd.min.js', array(), null, true);
wp_enqueue_script('fancy-init', get_template_directory_uri() . '/blocks/testimonials/fancy-init.js', array(), null, true);

?>

<section class="relative" id="testimonials">
    <div class="w-full mx-auto">
        <div class="swiper-container loading overflow-hidden">
            <div class="carousel">
                <?php while (have_rows('slide')) : the_row(); ?>
                    <?php
                    $quote = get_sub_field('quote');
                    $name = get_sub_field('name');
                    ?>
                    <div class="carousel__slide !w-full !p-0">
                        <div class="px-xl md:px-0 md:max-w-[550px] mx-auto my-xl">
                            <p class="font-domaine leading-relaxed"><?php echo $quote; ?></p>
                            <p class="text-xs text-center"><?php echo $name; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>