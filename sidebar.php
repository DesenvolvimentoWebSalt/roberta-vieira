<?php
/**
 * Template Name: contato
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<form action="<?=site_url()?>" method="get">
  <input type="search" name="s" placeholder="Pesquisar..." value="<?php the_search_query(); ?>" />
</form>

<nav class="categorias">
  <h4>Categorias</h4>
  <?php 
      $args = array(
      'show_option_all'    => '',
      'orderby'            => 'name',
      'order'              => 'ASC',
      'style'              => 'list',
      'show_count'         => 0,
      'hide_empty'         => 0,
      'use_desc_for_title' => 0,
      'child_of'           => 9,
      'title_li'           => __( '' )
      );
      wp_list_categories( $args ); 
    ?>
</nav>

<?php get_footer();