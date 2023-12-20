<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<footer>

  <div class="bootscore-footer pt-5 pb-3">
    <div class="<?php echo bootscore_container_class(); ?>">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <?php dynamic_sidebar('top footer'); ?>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
        </div>

      </div>

      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container'      => false,
        'menu_class'     => '',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth'          => 1,
        'walker'         => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>

    </div>
  </div>

  <div class="bootscore-info text-body-tertiary py-2 text-center">
    <div class="<?php echo bootscore_container_class(); ?>">
      <?php if (is_active_sidebar('footer-info')) : ?>
        <?php dynamic_sidebar('footer-info'); ?>
      <?php endif; ?>
      <small class="bootscore-copyright"><span class="cr-symbol">&copy;</span>&nbsp;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
    </div>
  </div>

</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
