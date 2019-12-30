    <footer class="container">
        <div class="footer-content">
            <?php dynamic_sidebar('footer'); ?>
        </div>
        <div class="footer-sitemap">
            <?php dynamic_sidebar('footer-sitemap'); ?>
        </div>

        <div class="footer-sitemap-collapsible">
            <button type="button" class="collapsible">
                <h3>Explore</h3>
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