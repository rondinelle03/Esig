


<?php if (taxonomy_exists( 'categories_services', 'governo' )): ?>
	<div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imagens/bg-paralax-governo.jpg"></div>
    </div>

<?php elseif (taxonomy_exists( 'categories_services', 'educacao' )): ?>

	<div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imagens/bg-paralax-educacao.jpg"></div>
    </div>

<?php else: ?>

	<div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imgs/bg-paralax.jpg"></div>
    </div>

<?php endif ?>





   