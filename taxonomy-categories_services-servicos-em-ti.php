 <?php
  /* Busca o arquivo header.php do tema e includa na página */

  get_header();
?>


<?php include 'imagens-paralax.php'; ?>


	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l8">
					<h1 class="titulo-interna">Serviços em TI
					</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>Soluções & serviços</span> </li>
						<li><span>Serviços em TI</span> </li>
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
