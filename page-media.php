<?php /* Template Name: Media */ ?>

<?php

wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', array(), null);
wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), null, true);
wp_enqueue_script('fancy-init', get_template_directory_uri() . '/assets/js/media-fancy-init.js', array(), null, true);

get_header();



?>


<article class="mx-auto h-full flex items-center">
    <div class="w-full">
        <div class="carousel">
            <?php $media_images = get_field('media'); ?>
            <?php if ($media_images) :  ?>
                <?php foreach ($media_images as $media_image) : ?>
                    <div class="carousel__slide w-[400px]">
                        <img src="<?php echo esc_url($media_image['sizes']['large']); ?>" alt="<?php echo esc_attr($media_image['alt']); ?>" data-fancybox="gallery" class="w-[220px] h-[300px] object-cover mx-auto" />
                        <p class="text-center"><?php echo esc_html($media_image['title']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</article>

<?php get_footer() ?>