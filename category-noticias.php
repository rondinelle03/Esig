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
				<div class="col s12 ">
					<h1 class="titulo-interna">NOTÍCIAS</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>NOTÍCIAS</span> </li>
						
					
					</ul>
				<div class="bloco-noticias-x">
					<?php query_posts(array( 'showposts' => '12', 'cat' => '-126,-127' )); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="row">
					

						<div class="col s12 ">
						   	<a href="<?php the_permalink(); ?>">
						   	<div class="tit-noticia">
						    		<h4><?php echo strip_tags(get_the_title()); ?></h4>
									<h6><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?> • Por <?php the_author(); ?></h6>
						    	</div>
							</a>
						    <div class="conteudo-lista">
						    	<p class="center"><img src="<?php echo catch_that_image() ?>" class="responsive-img"></p>
						    	<div class="texto">
									<?php the_excerpt(); ?> 
								</div>

								<p><a href="<?php the_permalink(); ?>"	class="ver-mais">LER MAIS</a></p>
						    </div>



						</div>
						
				
				</div>

				<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>

				<div class="row">
					<div class="col s12">
<div class="navigation">
            <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
                    </div>  
					</div>
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
		</div>
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>