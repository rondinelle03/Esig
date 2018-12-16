 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
  <div class="parallax-container">
      <div class="parallax"><img src="<?php the_field('topo_imagem'); ?>"></div>
    </div>
	
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l8">
					<h1 class="titulo-interna"><?php echo strip_tags(get_the_title()); ?></h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span><?php the_field('termo'); ?></span> </li>
						<li><span><?php 
							$args = array(
								 'template' => __( '<em>%s</em> %l' ),  
							);
							the_taxonomies( $args ); 
							?> </span></li>
						
					
					</ul>


					<div class="conteudo lista-sistemas">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="texto">
							 <?php the_content(); ?> 
							</div>




						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
						

					</div><!--.conteudo-->
					<div class="row">
						<div class="col s4 m4">
							<a class="waves-effect waves-light btn-large bgint" href="javascript:history.back()">voltar</a>
						</div>
						<div class="col s7 m8">
							<div class="right addthis_inline_share_toolbox"></div>
						</div>
					</div>
				</div><!---.col s12 m6 l8-->

				<?php
				  /* Busca o arquivo footer.php do tema e includa na página */
				  get_sidebar('depoimentos');
				?>

			</div>
		</div>
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>