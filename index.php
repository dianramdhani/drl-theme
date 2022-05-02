<?php get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<main id="main">
  <?php
  get_template_part('template-parts/about');
  get_template_part('template-parts/facts');
  get_template_part('template-parts/facts');
  get_template_part('template-parts/skills');
  get_template_part('template-parts/resume');
  get_template_part('template-parts/portofolio');
  get_template_part('template-parts/services');
  get_template_part('template-parts/testimonials');
  get_template_part('template-parts/contact');
  ?>
</main><!-- End #main -->

<?php get_footer(); ?>