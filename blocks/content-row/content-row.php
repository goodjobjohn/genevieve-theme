<?php

/**
 * Block template file: /Users/john/Local/botanic-garden/app/public/wp-content/themes/coast-theme/blocks/content-row/content-row.php
 *
 * Content Row Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'content-row-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-content-row';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<?php
$count = count(get_field('column')); // number of columns
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> my-md container relative my-lg">
    <div class="grid grid-cols-<?= $count; ?> gap-lg">
        <?php if (have_rows('column')) : ?>
            <?php while (have_rows('column')) : the_row(); ?>
                <?php if (get_row_layout() == 'site_content') : ?>

                    <?php
                    $object = get_sub_field('post_or_page');
                    $card_meta = get_field('card_meta', $object->ID);
                    ?>
                    <?php if ($object) : ?>
                        <div class="shade col-span-full mx-md lg:mx-sm lg:col-span-1 aspect-[4/3] relative transition-all hover:opacity-90">
                            <a class="relative w-full h-full block" href="<?php the_permalink($object->ID); ?>">

                                <?php if (has_post_thumbnail($object->ID)) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url($object->ID, 'large'); ?>" class="w-full h-full object-cover ">
                                <?php endif; ?>

                                <div class="absolute h-auto p-sm bottom-0 left-0 right-0 z-10 bg-lgreen text-white">
                                    <?php if ($card_meta) : ?>
                                        <div class="card-meta absolute top-[-13px] right-[10px] bg-grey text-lgreen text-xs px-xs py-[2px]">
                                            <?= $card_meta; ?>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="mb-0 uppercase text-center"><?= $object->post_title; ?></h3>
                                    <?php if (get_sub_field('display_excerpt') === true) : ?>
                                        <?php echo get_the_excerpt($object->ID); ?>
                                    <?php endif; ?>

                                </div>
                            </a>
                        </div>
                    <?php endif; ?>

                <?php elseif (get_row_layout() == 'custom_link') : ?>
                    <?php
                    $link = get_sub_field('link');
                    // var_dump($link);
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    $thumb = get_sub_field('thumbnail');
                    ?>
                    <div class="shade col-span-full mx-md lg:mx-sm lg:col-span-1 aspect-[4/3] relative transition-all hover:opacity-90">
                        <a class="relative" href="<?= $link_url; ?>">

                            <?php if ($thumb) : ?>
                                <?php echo wp_get_attachment_image($thumb, 'large', false, 'class=w-full h-full object-cover '); ?>
                            <?php endif; ?>

                            <div class="absolute h-auto p-sm bottom-0 left-0 right-0 z-10 bg-lgreen text-white">
                                <h3 class="mb-0 uppercase text-center"><?= $link_title; ?></h3>
                                <?php if (get_sub_field('display_excerpt') === true) : ?>
                                    <?php echo get_the_excerpt($object->ID); ?>
                                <?php endif; ?>

                            </div>
                        </a>
                    </div>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No layouts found 
            ?>
        <?php endif; ?>
    </div>
</section>