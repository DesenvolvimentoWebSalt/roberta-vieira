<?php
/**
 * Template Name: sobre
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>


<section class="sobre">
  <div class="container">
    <div class="img-wrapper">
      <div class="bg-azul"></div>
      <div class="sobre-img">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/sobre.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/sobre@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/sobre@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/sobre@2x.jpg">
        </picture>
      </div>
    </div>

    <div class="sobre-txt">
      <h3>DRA. ROBERTA VIEIRA</h3>
      <h5>CRMMG: 37494</h5>

      <p>Sou Roberta Vieira, cirurgiã vascular com 10 anos de experiência no diagnóstico e tratamento das doenças
        vasculares, especialmente as doenças venosas. </p>

      <p>Formei em medicina em 2002, pela Universidade Federal de Juiz de Fora e me especializei em Cirurgia Vascular no
        Hospital Vera Cruz, em Belo Horizonte. Desde então sou membro do corpo clínico deste serviço e, também, do
        Hospital Mater Dei.
        Faço parte da Sociedade Brasileira de Angiologia e Cirurgia Vascular e da Sociedade Brasileira de Laser em
        Medicina e Cirurgia. Busco sempre atualização e inovação tecnológica, sem esquecer o olhar individualizado e o
        cuidado com o paciente.
        Seguindo a tendência atual e visando a segurança e o conforto do paciente, utilizo a combinação de várias
        técnicas minimamente invasivas no tratamento das varizes, buscando um resultado eficaz, rápido e duradouro.</p>

      <div class="sobre-midias">
        <a href="" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#instagram"></use>
          </svg>
        </a>

        <a href="" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#facebook"></use>
          </svg>
        </a>

        <a href="" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#youtube"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>


<?php get_footer();