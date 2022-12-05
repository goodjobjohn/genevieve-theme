<?php get_header() ?>

<article class="max-w-screen-lg mx-auto fixed inset-0 flex items-center">

    <h1 class="text-3xl font-semibold hidden"><?php the_title() ?></h1>
    <div class="min-w-0">
        <?php the_content() ?>
    </div>

</article>

<?php get_footer() ?>