    </main>

    <footer class="bg-slate-100 justify-between w-full px-4 py-2 max-w-[1200px] mx-auto">
        <div class="flex justify-between uppercase tracking-[2px]">
            <div id=" left-menu" class="text-[11px]">
                <?php echo wp_nav_menu(array('menu' => 'Footer Left')); ?>
            </div>
            <div id="right-menu" class="flex text-[9px]">
                <?php echo wp_nav_menu(array('menu' => 'Footer Right')); ?>
                <span>All Rights Reserved Genevieve Wallis <?php echo date_i18n('Y'); ?></span>
            </div>
        </div>
        <div class="container mx-auto text-center">
            <p class="text-xs">Currently in <strong><?php echo (IS_VITE_DEVELOPMENT) ? "development" : "production" ?></strong> mode.</p>
        </div>
    </footer>

    <?php wp_footer() ?>
    </body>

    </html>