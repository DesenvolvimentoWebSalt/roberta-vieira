<?php
/**
 * Template Name: contato
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>


<div class="footer">
  <div class="lado-contato">
    <div class="mapa">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.6076208636173!2d-43.92847204914143!3d-19.94093314373398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699c7bafad7d5%3A0x5bb344854157c5cc!2sEDIFICIO%20SILVIO%20MENICUCCI%20-%20R.%20Albita%2C%20131%20-%20307%20-%20Cruzeiro%2C%20Belo%20Horizonte%20-%20MG%2C%2030310-160!5e0!3m2!1spt-BR!2sbr!4v1592506701366!5m2!1spt-BR!2sbr"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>

    <div class="footer-contato">
      <a href="https://goo.gl/maps/s38vopsP45sE7tx77" target="_blank">Rua Albita, 131 - sala 307
        Bairro Cruzeiro
        Belo Horizonte – MG
        CEP: 30310-160</a>

      <a href="tel:3132674138" target="_blank" class="alinha">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#tel"></use>
        </svg>
        <p> (31) 3267-4138</p>
      </a>


      <a href="https://api.whatsapp.com/send?phone=+5531971474138" target="blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#whatsapp"></use>
        </svg>
        <p>(31) 97147-4138</p>
      </a>

      <div class="midias-wrapper">
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

  <div class="footer-formulario">
    <div class="alinha">
      <svg width="32" height="32" viewBox="0 0 32 32">
        <use xlink:href="#arrow"></use>
      </svg>
      <h2>Fale Conosco</h2>
    </div>

    <div class="formulario">
      <?php echo do_shortcode('[contact-form-7 id="33" title="Formulário de contato 1"]'); ?>
    </div>
  </div>


</div>

<section class="galeria-instagram">
  <div class="img-insta">
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i01.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i01.jpg" type="image/jpg" media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i01@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i01@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/i01@2x.jpg" alt="consultorio" data-modal>
    </picture>

    <svg width="32" height="32" viewBox="0 0 32 32">
      <use xlink:href="#instagram"></use>
    </svg>
  </div>

  <div class="img-insta">
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i02.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i02.jpg" type="image/jpg" media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i02@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i02@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/i02@2x.jpg" alt="consultorio" data-modal>
    </picture>

    <svg width="32" height="32" viewBox="0 0 32 32">
      <use xlink:href="#instagram"></use>
    </svg>
  </div>

  <div class="img-insta">
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i03.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i03.jpg" type="image/jpg" media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i03@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i03@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/i03@2x.jpg" alt="consultorio" data-modal>
    </picture>

    <svg width="32" height="32" viewBox="0 0 32 32">
      <use xlink:href="#instagram"></use>
    </svg>
  </div>

  <div class="img-insta">
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i04.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i04.jpg" type="image/jpg" media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/i04@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/i04@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/i04@2x.jpg" alt="consultorio" data-modal>
    </picture>

    <svg width="32" height="32" viewBox="0 0 32 32">
      <use xlink:href="#instagram"></use>
    </svg>
  </div>
</section>

<div class="rodape">
  <p>Todos os direitos reservados a Roberta Vieira. Desenvolvido por <a href="https://agenciasalt.com.br"
      target="_blank">Agência Salt.</a></p>
</div>

<?php get_footer();