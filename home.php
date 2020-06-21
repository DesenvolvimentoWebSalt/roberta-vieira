<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>


<style>
.webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/banner@2x.webp')
}

.no-webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner@2x.jpg')
}

.webp .homeparallax {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax@2x.webp')
}

.no-webp .homeparallax {
  background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax@2x.jpg')
}

@media screen and (max-width: 650px) {


  .webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/banner.webp')
  }

  .no-webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner.jpg')
  }

  .webp .homeparallax {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/parallax.webp')
  }

  .no-webp .homeparallax {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/parallax.jpg')
  }
}
</style>

<section class="banner">
  <div class="container">
    <div class="h1-wrapper">
      <img src="<?=get_template_directory_URI()?>/img/src/seta.png">
      <h1>Tecnologia de ponta no diagnóstico e entrega de resultados</h1>
    </div>
  </div>
</section>

<section class="home-angiologia">
  <div class="container">
    <div class="bg-main"></div>
    <div class="angiologia-txt">
      <div class="alinha-angiologia">
        <img src="<?=get_template_directory_URI()?>/img/src/seta.png">
        <p class="angiologia-p">angiologia</p>
      </div>

      <h2>Diagnóstico</h2>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim </p>

      <a href="" class="ver-mais">VER MAIS</a>
    </div>

    <div class="angiologia">

      <div class="angiologia-wrapper">
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
  </div>
</section>

<section class="homeparallax"></section>

<section class="homeprocedimentos">
  <div class="bg-rosa">
    <div class="container">
      <div class="alinha alinha-procedimentos">
        <img src="<?=get_template_directory_URI()?>/img/src/seta.png">
        <p>PROCEDIMENTOS E</p>
      </div>

      <h3>Tratamentos</h3>
    </div>
  </div>

  <div class="bg-branco">
    <div class="container">
      <?php
        query_posts(array(
          'post_type' => 'page',
          'post_parent' => 12,
          'posts_per_page' => 4
        )); ?>

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

      <a class="procedimento-a" href="<?=the_permalink()?>">
        <div class="thumb-img">
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>">
        </div>
        <p><?=the_title()?></p>
      </a>

      <?php  endwhile; endif; ?>
    </div>

  </div>
  <a href="" class="ver-mais">VER TODOS</a>
</section>

<section class="homesobre">
  <div class="img-side">
    <div class="bg-main"></div>
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/homesobre.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/homesobre.jpg" type="image/jpg"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/homesobre@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/homesobre@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/homesobre@2x.jpg" alt="consultorio" data-modal>
    </picture>
  </div>

  <div class="txt-side">
    <div class="alinha">
      <svg width="32" height="32" viewBox="0 0 32 32" class="next">
        <use xlink:href="#arrow"></use>
      </svg>
      <p>SOBRE</p>
    </div>

    <h2>Dra. Roberta Vieira</h2>
    <h4>CRMMG: 37494</h4>
    <p>Sou Roberta Vieira, cirurgiã vascular com 10 anos de experiência no diagnóstico e tratamento das doenças
      vasculares, especialmente as doenças venosas. </p>
    <p>Formei em medicina em 2002, pela Universidade Federal de Juiz de Fora e me especializei em Cirurgia Vascular no
      Hospital Vera Cruz, em Belo Horizonte. Desde então sou membro do corpo clínico deste serviço e, também, do
      Hospital Mater Dei.
      Faço parte da Sociedade Brasileira de Angiologia e Cirurgia Vascular e da Sociedade Brasileira de Laser em
      Medicina e Cirurgia. Busco sempre atualização e inovação tecnológica, sem esquecer o olhar individualizado e o
      cuidado com o paciente.
      Seguindo a tendência atual e visando a segurança e o conforto do paciente, utilizo a combinação de várias técnicas
      minimamente invasivas no tratamento das varizes, buscando um resultado eficaz, rápido e duradouro.</p>

    <p>Seja bem-vindo(a)!</p>

    <a href="" class="ver-mais">VER MAIS</a>
  </div>
</section>

<section class="homeblog">
  <div class="container">
    <div class="alinha">
      <svg width="32" height="32" viewBox="0 0 32 32" class="next">
        <use xlink:href="#arrow"></use>
      </svg>
      <p>BLOG</p>
    </div>

    <h2>Notícias</h2>

    <div class="homeblog-wrapper">
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

  <a href="" class="ver-mais bg-rosa">VER MAIS</a>
</section>

<section class="depoimentos">
  <div class="container">
    <div class="alinha">
      <svg width="32" height="32" viewBox="0 0 32 32" class="next">
        <use xlink:href="#arrow"></use>
      </svg>
      <p>o que dizem sobre nós</p>
    </div>
    <h2>Depoimentos</h2>

    <div class="depoimentos-wrapper">
      <?php
        query_posts(array(
          'post_type' => 'depoimentos'
        )); ?>

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="depoimento">
        <p><?=the_content()?></p>
        <p class="nome-depoimento"><?=the_title()?></p>
      </div>
      <? endwhile; endif; ?>
    </div>
  </div>
</section>


<?php get_footer();