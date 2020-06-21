<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', get_post_format() ); ?>

<section class="bloginterno">
  <div class="container">
    <div class="conteudo-blog">
      <h1><?=the_title()?></h1>

      <div class="blogimagem">
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
      </div>

      <p class="conteudo-p"><?=the_content()?></p>

      <div class="dra-blog">
        <img src="<?=get_template_directory_URI()?>/img/src/sobre.jpg" class="img-drablog">
        <div class="txt-drablog">
          <h4>Roberta Vieira</h4>
          <p>CRMMG: 37494<br>
            Lorem Ipsum
          </p>
        </div>
      </div>

      <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="5" mobile="false"></div>
    </div>

    <?php include 'sidebar.php' ?>
  </div>
</section>

<?php endwhile; ?>


<?php get_footer(); ?>