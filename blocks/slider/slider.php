<?php
wp_enqueue_style('swiper-styles', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);
wp_enqueue_script('swiper-init', get_template_directory_uri() . '/blocks/slider/swiper-init.js', array(), null, true);

$heading = get_field("heading");
$subheading = get_field("subheading");
?>

<section class="carousel relative bg-white overflow-hidden" id="<?= get_row_layout() ?>">


    <!-- Heading -->
    <div class="container !absolute inset-0 flex flex-col justify-center lg:items-start !z-10 text-white">
        <?php if ($heading) : ?>
            <div class="mx-lg lg:m-sm" data-aos="fade-up">
                <h2 class="text-center lg:text-left my-sm font-bold text-4xl text-shadow"><?= $heading; ?></h2>
            </div>
        <?php endif; ?>
        <?php if ($subheading) : ?>
            <div class="mx-lg lg:mx-sm" data-aos="fade-up">
                <h3 class="text-center font-bold my-sm text-2xl text-shadow"><?= $subheading; ?></h3>
            </div>
        <?php endif; ?>
    </div>

    <!-- Carousel -->
    <div class="w-full mx-auto">
        <div class="swiper-container loading">
            <div class="swiper-wrapper">
                <?php while (have_rows('slide')) : the_row(); ?>
                    <?php
                    $image = get_sub_field('image');
                    $focus = get_sub_field('focus');
                    ?>
                    <div class="swiper-slide" style="background-image:url(<?php echo wp_get_attachment_image_url($image, 'full'); ?>)">
                        <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" class="entity-img" />

                    </div>
                <?php endwhile; ?>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev swiper-button-white hidden"></div>
            <div class="swiper-button-next swiper-button-white hidden"></div> -->
        </div>
    </div>


</section>