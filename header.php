<!DOCTYPE html>
<html lang="en" <?php if (is_front_page()) : ?>class="dark" <?php endif; ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The CDN font loaded is a stylesheet which for preload to work needs rel="stylesheet" and as="style" -->
    <link rel="stylesheet preload" as="style" href="https://fonts.cdnfonts.com/css/domaine-display?styles=20934">
    <link rel="stylesheet preload" as="style" href="https://fonts.cdnfonts.com/css/maison-neue?styles=49784,49786">

    <?php wp_head() ?>
</head>

<body <?php body_class('flex flex-col h-screen bg-offwhite dark:bg-green text-green dark:text-offwhite') ?>>
    <?php wp_body_open(); ?>

    <header class="flex-0 bg-slate-100 px-4 z-50 md:mt-[30px]">
        <div class="max-w-[1200px] mx-auto flex justify-between items-center min-h-[40px]">
            <!-- Logo -->
            <div id="logo" class="grid col-span-3 h-[30px] xl:h-auto xl:col-span-3">
                <!-- Desktop Logo -->
                <a href="<?php bloginfo('url'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 135.28 43.11" class="h-[30px] fill-green dark:fill-offwhite">
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="ARTWORK">
                                <path class="cls-1" d="M134.94.48c-1.51,0-4.35.13-5.14.13-1,0-5.8-.13-6.89-.13-.6,0-.72.19-.72.37s.12.36.42.36S123.76,1,124.24,1c2.12,0,3.08,1.27,3.08,3.2a27.81,27.81,0,0,1-1.93,8.71l-8.22,21.4c-.06.12-.12.24-.24.24a.41.41,0,0,1-.31-.24l-7.55-18.5,1.81-4.17C113.66,5.08,116.81,1,119.59,1h.84c.43,0,.49-.55,0-.55-1.45,0-5.26.13-6,.13-1,0-4.36-.13-5.44-.13-.61,0-.67.19-.67.37s.06.3.36.3S109.55,1,110,1c1.15,0,2,.78,2,2.72a20.29,20.29,0,0,1-1.82,7.68l-1.51,3.5-2.54-6.28c-1.33-3.39-1.63-5.08-1.63-6.11S105,1,106.34,1h.25c.48,0,.48-.55,0-.55-1.76,0-6.11.19-7,.19S94,.48,92.26.48c-.42,0-.49.55,0,.55h.24c2.72,0,3.51.84,6.77,8.83l4.9,12-5.44,12c-.06.12-.18.3-.31.3a.53.53,0,0,1-.3-.24L91.23,16.14c-3.51-8.95-4.53-12-4.53-13.42.06-1,.78-1.69,2.35-1.69H90c.48,0,.42-.55,0-.55-1.75,0-8,.25-8.95.25S75.51.48,73.76.48c-.43,0-.73.55.06.55h.12c3.2,0,3.87.36,8.34,12L87.59,27c-3.43.18-13,.34-24.9.34-9,0-17.15-.1-22.12-.22V23.28c0-.3-.18-.49-.36-.49-7.62.49-14.45.67-22.49.67-.31,0-.31.42-.07.42,5.75.12,11.13.3,12.76.61,1,.6,1.81,1.87,2.24,5.92.06.24.06,2.72.06,3.87,0,3.75,0,5.08-.18,5.62a18,18,0,0,1-9.62,2.66c-9.43,0-14.08-8.22-14.08-21S14.45.54,24.3.54c5.2,0,8.59,1.88,11,5.14a26.21,26.21,0,0,1,3.93,11.37c.06.36.54.36.54,0-.18-4.53-.54-12-.66-14,0-.48-.18-.66-.43-.72A49.77,49.77,0,0,0,24.18,0C10.82,0,0,8.16,0,21.77,0,35,10,43.11,23,43.11c5.38,0,9-1.88,11.25-1.88,1.87,0,3.57.73,5.74,1.58.12.12.61.12.61,0V28.22c4.83-.14,12.64-.24,22-.24,12.94,0,22.21.18,25.56.42l5.28,13.86c.12.24.3.3.66.3h1.15c.24,0,.48-.06.55-.3l8.82-19.4,7.92,19.46c.12.3.31.3.67.3h1.15c.3,0,.48-.06.54-.3l11.31-29.08C129.38,4.84,131.8,1,134.76,1h.18C135.37,1,135.43.48,134.94.48Z" />
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <!-- Toggle -->
            <div class="w-[56px] h-[56px] grid content-center justify-end lg:hidden">
                <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle" class="grid content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </a>
            </div>
            <!-- Menu -->
            <div id="nav-wrapper" class="fixed top-[100px] left-0 lg:relative lg:top-0">
                <?php echo wp_nav_menu(array('theme_location'  => 'main-menu')); ?>
            </div>
        </div>
    </header>

    <main class="flex-grow px-4 py-4">