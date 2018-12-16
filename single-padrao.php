 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
   <div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imagens/bg-paralax-noticias.jpg"></div>
    </div>
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l9">



					<h1 class="titulo-interna">NOTÍCIAS</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span><a href="<?php bloginfo('url'); ?>/imprensa/noticias/">NOTÍCIAS</a></span> </li>
						
					
					</ul>

					<div class="tit-noticia">
						    		<h4><?php echo strip_tags(get_the_title()); ?></h4>
									<h6><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?> • Por <?php the_author(); ?></h6>
						    	</div>

					<div class="conteudo">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="texto">
							 <?php the_content(); ?> 
							</div>
						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
						

					</div><!--.conteudo-->
					<div class="row">
						<div class="col s6 m4">
							<a class="waves-effect waves-light btn-large bgint" href="javascript:history.back()">voltar</a>
						</div>
						<div class="col s6 m8">
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