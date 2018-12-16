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