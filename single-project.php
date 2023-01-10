<?php

get_header();

wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), null, true);
wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', array(), null);
wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), null, false);


?>
<!-- <script defer src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
<script defer>
    // var elem = document.querySelector('.grid');
    // var msnry = new Masonry(elem, {
    //     // options
    //     itemSelector: '.grid-item',
    //     columnWidth: 200
    // });

    // // element argument can be a selector string
    // //   for an individual element
    // var msnry = new Masonry('.grid', {
    //     // options
    // });
</script>

<style>
    .grid-item {
        /* width: 49%; */
        margin-bottom: 15px;
    }
</style>

<article class="max-w-screen-lg mx-auto ">
    <div class="mt-4">

        <?php
        $details = get_field('details');
        $architecture = get_field('architecture');
        $build = get_field('build');
        $photography = get_field('photography');
        ?>

        <div class="3xl:fixed lg:left-[100px] lg:bottom-[100px]">
            <h1 class="text-3xl"><?php the_title() ?></h1>

            <div id="details" class="my-lg">
                <?php if ($details) : ?>
                    <p class="text-sm m-0"><?php echo $details ?></p>
                <?php endif; ?>
                <?php if ($architecture) : ?>
                    <p class="text-sm m-0">Architecture: <?php echo $architecture ?></p>
                <?php endif; ?>
                <?php if ($build) : ?>
                    <p class="text-sm m-0">Build: <?php echo $build ?></p>
                <?php endif; ?>
                <?php if ($photography) : ?>
                    <p class="text-sm m-0">Photography: <?php echo $photography ?></p>
                <?php endif; ?>
            </div>
        </div>

        <?php $gallery_ids = get_field('gallery'); ?>
        <?php $size = 'large'; ?>
        <?php if ($gallery_ids) :  ?>
            <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-item", "gutter": 15}'>
                <?php foreach ($gallery_ids as $gallery_id) : ?>



                    <div class="grid-item w-full md:w-[49%] "><?php echo wp_get_attachment_image($gallery_id, $size, false, "data-fancybox='gallery'"); ?></div>



                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <a href="javascript:history.back()" class="block text-center m-lg">← Back to Projects</a>
</article>


<?php get_footer() ?>