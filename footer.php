<footer class="site-footer container">
    <div class="footer-content">
        <?php
        $args = array(
                    'theme_location' => 'footer_menu',
                    'container' => 'nav',
                    'menu_id'    => 'footer_id',
                    'container_class' => '',
                    'menu_class' => 'footer-menu menu',
                    'orderby' => 'menu_order',
                );
                wp_nav_menu($args);
        ?>
        <p class="copyright">All Rights Reserved. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>