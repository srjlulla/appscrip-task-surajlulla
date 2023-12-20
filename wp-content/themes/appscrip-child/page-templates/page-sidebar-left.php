<?php

/**
 * Template Name: Left Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

  <div id="content" class="site-content <?php echo bootscore_container_class(); ?> ">
    <div id="primary" class="content-area">

      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>

      <div class="row">
        <?php get_sidebar(); ?>
        <div class="<?php echo bootscore_main_col_class(); ?> order-first order-md-last">

          <main id="main" class="site-main">

            <header class="entry-header">
              <?php the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <?php bootscore_post_thumbnail(); ?>
            </header>

            <div class="entry-content">
              <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
              <?php comments_template(); ?>
            </footer>

          </main>

        </div>
      </div>

    </div>
  </div>

<?php
get_footer();
