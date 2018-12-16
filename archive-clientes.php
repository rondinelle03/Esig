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
				<div class="col s12 m6 l9">
					<h1 class="titulo-interna">CLIENTES</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span>CLIENTES</span> </li>
						
					
					</ul>

					
				<ul class="outras-instituicoes-cl">
					<?php query_posts(array( 'post_type' => 'clientes','showposts' => '12' )); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					
							<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
					
						<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>

				</ul>


<div class="row">
	<div class="col s12">
<div class="navigation">
            <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
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

				<?php
				  /* Busca o arquivo footer.php do tema e includa na página */
				  get_sidebar();
				?>

			</div>
		</div>
	</section>

<?php include 'solucoes.php'; ?>
	

 <?php
  /* Busca o arquivo footer.php do tema e includa na página */
  get_footer();
?>