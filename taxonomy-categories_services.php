 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  /* Template Name: Educação */
  get_header();
?>
        

<?php include 'imagens-paralax.php'; ?>


	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l8">
					<h1 class="titulo-interna"><?php 
							$args = array(
								 'template' => __( '<em>%s</em> %l' ),  
							);
							the_taxonomies( $args ); 
							?> 
					</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>Soluções & serviços</span> </li>
					
						<li><span><?php the_field('termo'); ?></span> </li>
    	

						<li><span><?php 
							$args = array(
								 'template' => __( '<em>%s</em> %l' ),  
							);
							the_taxonomies( $args ); 
							?>  </span> 
						</li>
					</ul>
					<div class="conteudo">
						
						<?php echo term_description( ) ?>


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
					  /* Busca o arquivo sidebar.php do tema e includa na página */
					  get_sidebar('clientes');
					?>
			</div>
		</div>
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>