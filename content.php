<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single()) { ?>



<? } else { ?>

<section class="blogexterno">
  <div class="container">

    <div class="blog-wrapper">
      <?php
        query_posts(array(
          'post_type' => 'post'
        )); ?>

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <a href="<?=the_permalink()?>" class="blog-wrapper">
        <div class="post-thumb">
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
        </div>

        <h4><?=the_title()?></h4>
        <p><?=custom_excerpt2(120)?></p>
      </a>

      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<? } ?>