 <?php
  /* Busca o arquivo header.php do tema e includa na página */

  get_header();
?>


<?php include 'imagens-paralax.php'; ?>


	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l8">
					<h1 class="titulo-interna">Educação
					</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>Soluções & serviços</span> </li>
						<li><span>Educação</span> </li>
					</ul>
					<div class="conteudo">

						<?php echo term_description( ) ?>


						<h4 class="soluc">Soluções:</h4> 


					 



						<ul class="lista-solucoes">

								<?php
								$listed_post;
								if(have_posts()) :
									while(have_posts()) :
										the_post();
										$args = array(
									    'before' => '<li>
												<img src="http://www.test.brasilso.com/esig/wp-content/themes/esig/imgs/solucoes/tick-inside-circle.svg" width="52">
												<h5>
												<span>',
											  'template' => __( '<em>%s</em> %l' ),
										    'after' => '</h5></span></li> ',
										);
										$taxonomy = get_post_taxonomies();
										$the_term = wp_get_post_terms($post->ID, $taxonomy, array("fields" => "all"));
										if (empty($listed_post[$the_term[0]->term_id])) {
											$listed_post[$the_term[0]->term_id] = $the_term[0]->name;
											the_taxonomies( $args );
										}
									endwhile;
								endif;
							  wp_reset_query();
							 	?>
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

				<div class="col s12 m6 l4">
					<div class="row">
						<div class="col s12">
							<h1 class="titulo-interna">quem usa</h1>

							<p>Aqui estão algumas instituições que usam nossas soluções.</p>
						</div>
					</div>

					<ul class="outras-instituicoes">

						<?php query_posts(array( 'post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('14')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

					<div class="row">
						<div class="col s12">
							<a class="waves-effect waves-light btn-large bgint" href="<?php bloginfo('url'); ?>/clientes">veja mais</a>
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
