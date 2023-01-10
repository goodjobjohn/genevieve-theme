<?php /* Template Name: Projects */ ?>

<?php get_header() ?>

<?php
$current_page =  'underline'; ?>



<article class="mx-auto ">

    <div class="mt-4">
        <nav class="text-[11px] uppercase tracking-[2px] flex justify-center my-lg">
            <a href="<?php bloginfo('url'); ?>/projects/residential" class="m-[26px] 
            <?php if (is_page('residential')) : echo $current_page;
            endif; ?>">Residential</a>
            <a href="<?php bloginfo('url'); ?>/projects/hospitality" class="m-[26px] 
            <?php if (is_page('hospitality')) : echo $current_page;
            endif; ?>">Hospitality</a>
            <a href=" <?php bloginfo('url'); ?>/projects/workspace" class="m-[26px] 
            <?php if (is_page('workspace')) : echo $current_page;
            endif; ?>">Workspace</a>
        </nav>
        <?php $projects = get_field('projects'); ?>
        <?php if ($projects) : ?>
            <div class=" grid grid-cols-2 gap-x-[50px] max-w-[940px] mx-auto">
                <?php foreach ($projects as $post) : ?>
                    <?php setup_postdata($post); ?>
                    <?php $coming_soon = get_field('coming_soon'); ?>
                    <?php if ($coming_soon) : ?>
                        <div class="col-span-1">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/coming-soon.png'; ?>" class="border border-green/25 aspect-gold object-cover">
                            <p class="mt-sm text-center"><?php the_title(); ?></p>
                        </div>
                    <?php else : ?>
                        <div class="col-span-1">
                            <a href="<?php the_permalink(); ?>" class="aspect-gold overflow-hidden">
                                <?php the_post_thumbnail('large', 'class=aspect-gold object-cover'); ?>
                            </a>
                            <p class="mt-sm text-center"><?php the_title(); ?></p>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

</article>

<?php get_footer() ?>