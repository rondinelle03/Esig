<div class="col s12 m6 l4">
					<div class="row">
						<div class="col s12">
							<h1 class="titulo-interna det-aprova">quem usa aprova</h1>

							
						</div>
					</div><!--.row-->


<?php 

$posts = get_field('relacao-posts');



if( $posts ): ?>
    <ul>
    <?php foreach( $posts as $post): ?>
        <?php setup_postdata($post); ?>
       	<div class="row">
						<div class="col s12">
							<div class="depoimentos-box">
								<h4><a class="modal-trigger" href="#modal<?php the_ID(); ?>">“<?php the_field('resumo'); ?> ”</a></h4>
								<h6><span><?php echo strip_tags(get_the_title()); ?></span><?php the_field('funcao'); ?> </h6>
								<img class="det-img" src="<?php the_field('foto_do_autor'); ?>">
							</div>
						</div><!--.col s12 m6 l4-->
		</div><!--.row-->

					 <div id="modal<?php the_ID(); ?>" class="modal">
				    <div class="modal-content">
				    	<div class="depoimentos-box">
				     <h6><span><?php echo strip_tags(get_the_title()); ?></span><?php the_field('funcao'); ?> </h6>
				<?php the_content(); ?>
				  		</div>
				    </div>
				    <div class="modal-footer">
				      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
				    </div>
  		</div>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

				


					
				</div><!---.col s12 m6 l4--> 


