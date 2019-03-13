 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
   <div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imagens/bg-paralax-clientes.jpg"></div>
    </div>
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1 class="titulo-interna">CLIENTES</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>CLIENTES</span> </li>
						
					
					</ul>
 
<div class="conteudo">
<h4>Educação</h4>
 <?php query_posts(array('orderby' => 'rand','showposts' => '80', 'post_type' => 'clientes',

						'tax_query' => array( 
						        array( 
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'term_id', // id do campo da taxonomia...
                					'terms' => '14', // o termo da taxonomia
						        ) 
						    ) 

					)); ?>
					
			
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


					<div class="col s12 m6 l3 "><div class="z-depth-x box-client"><img class="2380 size-full responsive-img" src="<?php the_field('logo_da_empresa'); ?>"  /> <strong><?php echo strip_tags(get_the_title()); ?></strong></div></div>

						<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>
</div>



<div class="conteudo">
<h4>Governo</h4>
 <?php query_posts(array('orderby' => 'rand','showposts' => '80', 'post_type' => 'clientes',

						'tax_query' => array( 
						        array( 
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'term_id', // id do campo da taxonomia...
                					'terms' => '16', // o termo da taxonomia
						        ) 
						    ) 

					)); ?>
					
			
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


					<div class="col s12 m6 l3 "><div class="z-depth-x box-client"><img class="2380 size-full responsive-img" src="<?php the_field('logo_da_empresa'); ?>"  /> <strong><?php echo strip_tags(get_the_title()); ?></strong></div></div>

						<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>
</div>



<div class="conteudo">
<h4>Saúde</h4>
 <?php query_posts(array('orderby' => 'rand','showposts' => '80', 'post_type' => 'clientes',

						'tax_query' => array( 
						        array( 
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'term_id', // id do campo da taxonomia...
                					'terms' => '15', // o termo da taxonomia
						        ) 
						    ) 

					)); ?>
					
			
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


					<div class="col s12 m6 l3 "><div class="z-depth-x box-client"><img class="2380 size-full responsive-img" src="<?php the_field('logo_da_empresa'); ?>"  /> <strong><?php echo strip_tags(get_the_title()); ?></strong></div></div>

						<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>
</div>


<div class="conteudo">
<h4>Institutos Federais</h4>
 <?php query_posts(array('orderby' => 'rand','showposts' => '80', 'post_type' => 'clientes',

						'tax_query' => array( 
						        array( 
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'term_id', // id do campo da taxonomia...
                					'terms' => '119', // o termo da taxonomia
						        ) 
						    ) 

					)); ?>
					
			
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


					<div class="col s12 m6 l3 "><div class="z-depth-x box-client"><img class="2380 size-full responsive-img" src="<?php the_field('logo_da_empresa'); ?>"  /> <strong><?php echo strip_tags(get_the_title()); ?></strong></div></div>

						<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>
</div>

			

<div class="conteudo">
<h4>Empresas Privadas</h4>
 <?php query_posts(array('orderby' => 'rand','showposts' => '80', 'post_type' => 'clientes',

						'tax_query' => array( 
						        array( 
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'term_id', // id do campo da taxonomia...
                					'terms' => '120', // o termo da taxonomia
						        ) 
						    ) 

					)); ?>
					
			
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


					<div class="col s12 m6 l3 "><div class="z-depth-x box-client"><img class="2380 size-full responsive-img" src="<?php the_field('logo_da_empresa'); ?>"  /> <strong><?php echo strip_tags(get_the_title()); ?></strong></div></div>

						<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>
</div>
			
			









<div class="row">
	<div class="col s12">
<div class="navigation">
            <?php /* if (function_exists('pagination_funtion')) pagination_funtion(); */ ?>
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
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>