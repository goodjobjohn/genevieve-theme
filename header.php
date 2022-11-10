<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/domaine-display?styles=20934" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/maison-neue?styles=49784" rel="stylesheet">

    <?php wp_head() ?>
</head>

<body <?php body_class('flex flex-col h-screen bg-green text-offwhite') ?>>
    <?php wp_body_open(); ?>

    <header class="flex-0 bg-slate-100 px-4 border shadow-md">
        <div class="max-w-[1200px] mx-auto flex justify-between items-center min-h-[40px]">
            <!-- Logo -->
            <div id="logo" class="grid col-span-3 h-[30px] xl:h-auto xl:col-span-3">
                <!-- Desktop Logo -->
                <?php if (has_custom_logo()) : ?>
                    <a class="my-auto" href="<?php echo get_bloginfo('url'); ?>">
                        <img class="h-[30px]" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    </a>
                <?php endif; ?>
            </div>
            <!-- Toggle -->
            <div class="w-[56px] h-[56px] grid content-center md:hidden">
                <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle" class="grid content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </a>
            </div>
            <!-- Menu -->
            <div id="nav-wrapper" class="fixed top-[100px] left-0 lg:relative lg:top-0">
                <?php echo wp_nav_menu(array('menu' => 'Main')); ?>
            </div>
        </div>
    </header>

    <main class="flex-grow px-4 py-4">