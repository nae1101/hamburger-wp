<footer class="l-footer u-color__white">
        <ul class="p-footer-text c-font__Mplus1">
            <?php
				$args = array(
				'menu_class' => 'footer_nav',
				'container' => 'l-footer',
				);
				wp_nav_menu( array('theme_location' =>'footer_nav'));
				?>
        </ul>
        <small class="p-footer-copyright c-font__Mplus1">Copyright: RaiseTech</small>
    </footer>

    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js',array(),'3.7.0');
    ?>
    <?php wp_footer(array( 'theme_location' => 'footer_nav' )); ?>
</body>
</html>  