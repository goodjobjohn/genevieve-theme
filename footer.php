    </main>

    <footer class="bg-slate-100 justify-between w-full px-4 py-2 max-w-[1200px] mx-auto z-50">
        <div class="flex flex-col items-center md:flex-row md:justify-between uppercase tracking-[2px]">
            <div id="left-menu" class="text-[11px]">
                <?php echo wp_nav_menu(array('menu' => 'Footer Left')); ?>
            </div>
            <div id="right-menu" class="flex flex-col items-center md:flex-row text-[9px]">
                <?php echo wp_nav_menu(array('menu' => 'Footer Right')); ?>
                <span>All Rights Reserved Genevieve Wallis <?php echo date_i18n('Y'); ?></span>
            </div>
        </div>
        <!-- <div class="fixed top-0 right-0 bg-black z-50">
            <p class="text-xxs p-xs m-0"><strong><?php echo (IS_VITE_DEVELOPMENT) ? "dev" : "prod" ?></strong></p>
        </div> -->
    </footer>

    <?php wp_footer() ?>
    </body>

    </html>