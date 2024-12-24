<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl">
        <div class="row g-5 mb-4">
            <div class="col-md-4">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/nepi-logo.svg">
            </div>
            <div class="col-md-4">
                <div class="mb-2"><?= do_shortcode('[contact_email_icon]') ?></div>
                <div><?= do_shortcode('[contact_phone_icon]') ?></div>
            </div>
            <div class="col-md-4">
                <?= wp_nav_menu(array('theme_location' => 'footer_menu1', 'container_class' => 'footer__menu')) ?>
            </div>
        </div>
        <div class="row g-5 pb-4">
            <div class="col-md-8 fs-300">
                <?= get_field('footer_disclaimer', 'option') ?>
            </div>
        </div>
</footer>
<div class="colophon py-2">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-8">
                &copy; <?= date('Y') ?> NEPI
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>