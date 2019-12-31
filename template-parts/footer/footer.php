    <footer class="container">
        <div class="footer-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/supernacular-logo-white.svg" alt="Logo" class="logo">
            <p>All Rights Reserved &copy; 2019 Supernacular</p>
        </div>

        <div class="footer-sitemap">
            <?php dynamic_sidebar('footer'); ?>
        </div>

        <div class="footer-sitemap-collapsible">
            <button type="button" class="collapsible">
                <h3>Explore</h3>
                <span>&plus;</span>
            </button>
            <div class="content">
            <?php 
            $menu = wp_get_nav_menu_items('Footer Menu'); 

                foreach ($menu as $menu_item): ?>
                    <a href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a>
            <?php endforeach; ?>
            </div>

            <button type="button" class="collapsible">
                <h3>Legal</h3>
                <span>&plus;</span>
            </button>
            <div class="content">
                <?php 
                $menu = wp_get_nav_menu_items('Footer Legal'); 

                    foreach ($menu as $menu_item): ?>
                        <a href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>