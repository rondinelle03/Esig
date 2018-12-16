 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
   <div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imagens/bg-paralax-depoimentos.jpg"></div>
    </div>
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="titulo-interna">DEPOIMENTOS</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>DEPOIMENTOS</span> </li>
						
					
					</ul>

					
				<div class="row">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<div class="col s12 m6 l4">
						
							<div class="item">
								<div class="depoimentos-box">
									<h4> <a class="modal-trigger" href="#modal<?php the_ID(); ?>">“<?php the_field('resumo'); ?> ”</a></h4>
									<h6><span><?php echo strip_tags(get_the_title()); ?></span><?php the_field('funcao'); ?> </h6>
									<img class="det-img" src="<?php the_field('foto_do_autor'); ?>">
								</div>

							</div>

							<div id="modal<?php the_ID(); ?>" class="modal">
							    <div class="modal-content">
							    	<div class="depoimentos-box">

							     <h6><span><?php echo strip_tags(get_the_title()); ?></span><?php the_field('funcao'); ?> </h6>
							<?php the_content(); ?>
							  		</div>
							    </div>
							    <div class="modal-footer">
							      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
							    </div>
							  </div>
						</div>

					<?php endwhile; endif; ?> 
		         <?php wp_reset_query(); ?>


				</div>






<div class="navigation">
            <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
                    </div>  








					<div class="row">
						<div class="col s12 m4">
							<a class="waves-effect waves-light btn-large bgint" href="javascript:history.back()">voltar</a>
						</div>
						<div class="col s12 m8">
							<div class="right addthis_inline_share_toolbox"></div>
						</div>
					</div>
				</div><!---.col s12 m6 l8-->

				

			</div>
		</div>
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>