<?php
/**
 * Template Name: servicos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<?php 
$GLOBALS["link2"] = get_the_permalink(wp_get_post_parent_id(get_the_ID()));
$GLOBALS["nome2"] = get_the_title(wp_get_post_parent_id(get_the_ID()));
get_header(); ?>

<?php
$pai = wp_get_post_parent_id(get_the_ID());
if(has_children())
{
$mypages2 = get_pages( array( 'child_of' => get_the_ID(),  'orderby' => 'menu_order', 'order' => 'ASC' ) );
foreach( $mypages2 as $page2 ) { $linkpage = get_page_link( $page2->ID ); } ?>

<script>
window.open('<?=$linkpage?>', '_parent');
</script>
<? } else { ?>

<section class="tratamentos">
  <div class="container">
    <nav class="menu">
      <?php $mypages = get_pages( array( 'child_of' => $pai, 'orderby' => 'menu_order', 'order' => 'ASC' ) ); 
            foreach( $mypages as $page ) { ?>
      <a href="<?php echo get_page_link( $page->ID ); ?>" class="<? if (get_the_ID() == $page->ID) { echo " ativo";}?>">
        <?php echo $page->post_title; ?>
      </a>
      <? } ?>
    </nav>

    <div class="conteudo">
      <? while(have_posts()): the_post(); ?>
      <h1><?=the_title()?></h1>

      <div class="conteudo-imagem">
        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
      </div>

      <p><?=the_content()?></p>
      <? endwhile; ?>
    </div>
  </div>
</section>

<section class="diagnostico">
  <div class="container">
    <h2>Diagnóstico</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna
      aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
      sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="diagnostico-wrapper">
      <a href="" class="angiologia-box">
        <img src="<?=get_template_directory_URI()?>/img/src/realidade.png" alt="">
        <p>REALIDADE
          AUMENTADA</p>
      </a>

      <a href="" class="angiologia-box">
        <img src="<?=get_template_directory_URI()?>/img/src/ecodoppler.png" alt="">
        <p>ECODOPPLER
          VASCULAR</p>
      </a>

      <a href="" class="angiologia-box">
        <img src="<?=get_template_directory_URI()?>/img/src/fleboscopia.png" alt="">
        <p>FLEBOSCOPIA</p>
      </a>
    </div>
  </div>
</section>

<?php } ?>

<?php get_footer();