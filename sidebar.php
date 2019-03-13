 

				<div class="col s12 m6 l3">
					<div class="row">
						<div class="col s12">
							<h1 class="titulo-interna">ÚLTIMAS</h1>
						</div>
					</div>
				<div class="row">
					<?php query_posts(array( 'post_type' => 'post','showposts' => '2', 'cat' => '-125' )); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						
							<div class="col s12 l12 m6">
							    <div class="item">
							    	<a href="<?php the_permalink(); ?>">
								    	<div class="tit-not">
								    		<h4><?php echo strip_tags(get_the_title()); ?></h4>
											<h6><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?> • Por <?php the_author(); ?></h6>
											
								    	</div>
										<img src="<?php the_field('foto_de_chamada'); ?>">
									
										<!--<p> <? $content = get_the_excerpt();
			                                echo substr($content, 0, 150);
			                                ?>...</p>-->
									</a>
									<a href="<?php the_permalink(); ?>"	class="ver-mais">LER MAIS</a>
							    </div><!--.item-->
							</div>
						
					<?php endwhile; endif; ?> 
		         <?php wp_reset_query(); ?>
</div>
					<div class="row">
						<div class="col s12">
							<a class="waves-effect waves-light btn-large bgint" href="<?php bloginfo('url'); ?>/imprensa/noticias/">veja mais</a>
						</div>
					</div>
				</div><!---.col s12 m6 l4-->
