 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  /* Template Name: Big Data, Analitycs e BI */
  get_header();
?>
        
   <div class="parallax-container">
      <div class="parallax"><img src="<?php the_field('imagem_topo'); ?>"></div>
    </div>
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l8">
					<h1 class="titulo-interna"><?php echo strip_tags(get_the_title()); ?></h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>Soluções & serviços</span> </li>
						<li><span><?php echo strip_tags(get_the_title()); ?></span> </li>
					
					</ul>
					<div class="conteudo">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

							<?php the_content(); ?> 

						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
						

						<h4 class="soluc">Soluções:</h4>

						


						<ul class="lista-solucoes">
							<li>
								<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/tick-inside-circle.svg" width="52">
								<h5>
									<span>Cloud Computing</span>
									<a href="#">Veja nossas soluções</a>
								</h5>
							</li>
							<li>
								<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/tick-inside-circle.svg" width="52">
								<h5>
									<span>Desenvolvimento sob encomenda</span>
									<a href="#">Veja nossas soluções</a>
								</h5>
							</li>

							<li>
								<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/tick-inside-circle.svg" width="52">
								<h5>
									<span>Gold BI</span>
									<a href="#">Veja nossas soluções</a>
								</h5>
							</li>

							<li>
								<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/tick-inside-circle.svg" width="52">
								<h5>
									<span>Gold i2</span>
									<a href="#">Veja nossas soluções</a>
								</h5>
							</li>

							<li>
								<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/tick-inside-circle.svg" width="52">
								<h5>
									<span>Gold Reports</span>
									<a href="#">Veja nossas soluções</a>
								</h5>
							</li>

							<li>
								<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/tick-inside-circle.svg" width="52">
								<h5>
									<span>SIGDocs</span>
									<a href="#">Veja nossas soluções</a>
								</h5>
							</li>

							<li>
								<img src="<?php bloginfo('template_url'); ?>/imgs/solucoes/tick-inside-circle.svg" width="52">
								<h5>
									<span>Treinamentos</span>
									<a href="#">Veja nossas soluções</a>
								</h5>
							</li>



		
						
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

							<p>Aqui estão alguns clientes que usam nossas soluções.</p>
						</div>
					</div>

					<ul class="outras-instituicoes">

						<?php query_posts(array('orderby' => 'rand','showposts' => '4', 'post_type' => 'clientes',

								'tax_query' => array( 
								        array( 
								            'taxonomy' => 'empresas', //or tag or custom taxonomy
								            'field' => 'term_id', // id do campo da taxonomia...
		                					'terms' => '19', // o termo da taxonomia
								        ) 
								    ) 

							)); ?>


								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

								<div class="col s12 m6"><div class="z-depth-x box-client"><img class="2380 size-full responsive-img" src="<?php the_field('logo_da_empresa'); ?>"  /> <strong><?php echo strip_tags(get_the_title()); ?></strong></div></div>
						

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