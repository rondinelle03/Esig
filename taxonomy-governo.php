 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
   <div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imagens/bg-paralax-governo.jpg"></div>
    </div>
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l9">
					<h1 class="titulo-interna">Dentro de Governo</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span><?php the_category( ' ' ); ?></span> </li>
						
					
					</ul>

					
				
<h4 class="soluc">Soluções:</h4>


					<div class="conteudo">
						<ul class="lista-solucoes">
							
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

									<li>
										<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/dashboard.svg" width="52">
										<h5>
											<span>
											<a href="<?php the_permalink(); ?>"><?php echo strip_tags(get_the_title()); ?></a></span>
										</h5>
									</li>


								<?php endwhile; endif; ?> 
         					<?php wp_reset_query(); ?> 
						</ul>
						

					</div><!--.conteudo-->




					<div class="row">
						<div class="col s12 m4">
							<a class="waves-effect waves-light btn-large bgint" href="javascript:history.back()">voltar</a>
						</div>
						<div class="col s12 m8">
							<div class="right addthis_inline_share_toolbox"></div>
						</div>
					</div>
				</div><!---.col s12 m6 l8-->

				<?php
				  /* Busca o arquivo footer.php do tema e includa na página */
				  get_sidebar();
				?>

			</div>
		</div>
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>