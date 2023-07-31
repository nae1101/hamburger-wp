<footer class="l-footer u-color__white">
        <ul class="p-footer-text c-font__Mplus1">
            <!-- <li>ショップ情報</li>
            <li>|</li>
            <li>ヒストリー</li> -->
            <?php wp_nav_menu(); ?>
        </ul>
        <small class="p-footer-copyright c-font__Mplus1">Copyright: RaiseTech</small>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/main.js"></script> -->
    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js',array(),'3.6.0');
    ?>
    <?php wp_footer(); ?>
</body>
</html>  