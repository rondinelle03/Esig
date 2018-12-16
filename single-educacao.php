 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
   <div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imgs/bg-paralax.jpg"></div>
    </div>
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l8">
					<h1 class="titulo-interna"><?php echo strip_tags(get_the_title()); ?></h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>Soluções & serviços</span> </li>
						<li><span><a href="<?php bloginfo('url'); ?>/solucoes/educacao">EDUCAÇÃO</a></span></li>
						<li><span><?php 
							$args = array(
								 'template' => __( '<em>%s</em> %l' ),  
							);
							the_taxonomies( $args ); 
							?>  </span> 
						</li>
						<li><span><?php echo strip_tags(get_the_title()); ?></span> </li>
					
					</ul>
					<div class="conteudo lista-sistemas">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							 <?php the_content(); ?> 

						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
						

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

				<div class="col s12 m6 l4">
					<div class="row">
						<div class="col s12">
							<h1 class="titulo-interna det-aprova">quem usa aprova</h1>
						</div>
					</div>

					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand', 'showposts' => '2','post_type' => 'clientes',

						'tax_query' => array( 
						        array( 
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id', 
						            'terms' => array('14') 
						        ) 
						    ) 

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

								
								<div class="row">
									<div class="col s12">
										<div class="depoimentos-box">
											<h4>“<?php the_field('depoimento'); ?> ”</h4>
											<h6><span><?php the_field('responsavel_depoimento'); ?></span><?php the_field('funcao_depoimento'); ?> </h6>
											<img class="det-img" src="<?php the_field('imagem_depoimento'); ?>">
										</div>
									</div><!--.col s12 m6 l4-->
								</div><!--.row-->

								


								<?php endwhile; endif; ?> 
         					<?php wp_reset_query(); ?> 
						
					</ul>

					<div class="row">
						<div class="col s12">
							<a class="waves-effect waves-light btn-large bgint" href="#">veja mais</a>
						</div>
					</div>
				</div><!---.col s12 m6 l4-->
			</div>
		</div>
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>