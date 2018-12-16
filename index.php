 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
        <section>
        	<div class="principal-destaque owl-carousel owl-theme">


			<?php query_posts(array( 'post_type' => 'destaque','showposts' => '8' )); ?>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					    <div class="item" style="background: url(<?php the_field('imagem_de_fundo'); ?>);-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
					    	<div class="valign-demo valign-wrapper">
					    	  <h1 class="center-align"><?php echo strip_tags(get_the_title()); ?>
							  <span><?php the_field('chamada'); ?></span><br>
							  <a class="waves-effect waves-light btn" href="<?php the_field('link'); ?>"><?php the_field('nome_do_botao'); ?></a>
							 
							  </h1>
							</div>
					    </div>
				<?php endwhile; endif; ?> 
	         <?php wp_reset_query(); ?>




			    
			</div>
        </section>


<!-- Versão desktop-->
        <section class="solucoes-servicos">
        	<div class="bl-solucoes-um">
        		
        		<div class="valign-demo valign-wrapper hide-on-med-and-down">
					  <h2 class="right-align"><span>nossas</span>
						SOLUÇÕES<br>
						& SERVIÇOS
						<a>Somos especialistas em transformar ideias em<br>
 soluções, atendendo os mais diversos mercados<br>
 públicos e privados,
em todo o Brasil </a>
						</h2>

					</div>

				<div class="valign-demo valign-wrapper hide-on-med-and-up">
					  <h2 class="right-align"><span>nossas</span>
						SOLUÇÕES
						& SERVIÇOS
						
						</h2>

					</div>

        	</div>
        	<div class="bl-solucoes-dois">
				<div class="cont-solucoes">
		        		<ul id="cbp-tm-menu" class="cbp-tm-menu">
							<li>
								<a class="navtb subum" href="<?php bloginfo('url'); ?>/categories_services/educacao"><span class="ico-educacao"></span>Educação</a>
								
							</li>
							<li>
								<a class="navtb subdois" href="<?php bloginfo('url'); ?>/categories_services/saude"><span class="ico-saude"></span>Saúde</a>
								
							</li>
							<li>
								<a class="navtb subtres" href="<?php bloginfo('url'); ?>/categories_services/governo"><span class="ico-governo"></span>Governo</a>
								
							</li>
							<li>
								<a class="navtb subquatro" href="<?php bloginfo('url'); ?>/categories_services/gestao-empresarial"><span class="ico-gestao-empresarial"></span>Gestão Empresarial</a>
								
							</li>
							<li>
								<a class="navtb subcinco" href="<?php bloginfo('url'); ?>/categories_services/fundacao-de-apoio"><span class="ico-fundacao-de-apoio"></span>Fundação de Apoio</a>
								
							</li>
							<li>
								<a class="navtb subseis" href="<?php bloginfo('url'); ?>/categories_services/big-data-analitycs-e-bi"><span class="ico-big-data-analitcs-bi"></span>BIG, Data, Analitcs, BI</a>
								
								
							</li>
							<li>
								<a class="navtb subsete" href="<?php bloginfo('url'); ?>/categories_services/servicos-em-ti"><span class="ico-servicos-em-ti"></span>Serviços em TI</a>
								
								
							</li>
							<li>
								<a class="navtb suboito" href="<?php bloginfo('url'); ?>/categories_services/projetos-de-inovacao"><span class="ico-projetos-de-inovacao"></span>Projetos de Inovação</a>
								
								
							</li>
		        		</ul>
				</div><!--.cont sulucoes-->

        	</div>
        </section>
<!-- Versão desktop-->

		<section class="sessao-noticias">
			<div class="container">
				<h2 class="center">NOTÍCIAS</h2>

				<div class="bloco-noticias owl-carousel owl-theme">


				<?php query_posts(array( 'post_type' => 'post','showposts' => '4' )); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					    <div class="item">
					    	<a href="<?php the_permalink(); ?>">
						    	<div class="tit-not">
						    		<h4><?php echo strip_tags(get_the_title()); ?></h4>
									<h6><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?> • Por <?php the_author(); ?></h6>
						    	</div>
								<img src="<?php the_field('foto_de_chamada'); ?>">
							
								<p> <? $content = get_the_excerpt();
	                                echo substr($content, 0, 150);
	                                ?>...</p>
							</a>
							<a href="<?php the_permalink(); ?>"	class="ver-mais">LER MAIS</a>
					    </div><!--.item-->
					<?php endwhile; endif; ?> 
		         <?php wp_reset_query(); ?>


				    
				</div><!--.bloco-noticias-->

				<p class="center bt-plus"><a class="waves-effect waves-light btn-large">mais notícias</a></p>

			</div>
		</section>

		<section class="sessao-depoimentos">
			<div class="container">
				<h2 class="center">cases & depoimentos</h2>
				<!--<p class="center det-texto">SEO text nulla fermentum consequat auctor. Cras vestibulum<br> lacinia magna, sit amet fermentum arcu vulputate quis.</p>-->

				<div class="bloco-depoimentos owl-carousel owl-theme">


<?php query_posts(array( 'post_type' => 'depoimentos','showposts' => '20' )); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<div class="item">
						<div class="depoimentos-box">
							<h4> <a class="modal-trigger" href="#modal<?php the_ID(); ?>">“<?php the_field('resumo'); ?> ”</a></h4>
							<h6><span><?php echo strip_tags(get_the_title()); ?></span><?php the_field('funcao'); ?> </h6>
							<img class="det-img" src="<?php the_field('foto_do_autor'); ?>">
						</div>


					</div><!--.item-->


<?php endwhile; endif; ?> 
		         <?php wp_reset_query(); ?>


				</div><!--.row-->
				<div class="row">
					<p class="center bt-plus"><a class="waves-effect waves-light btn-large">ver todos</a></p>
				</div>
			</div>
		</section>


<?php query_posts(array( 'post_type' => 'depoimentos','showposts' => '20' )); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
 <!-- Modal Structure -->
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

<?php endwhile; endif; ?> 
		         <?php wp_reset_query(); ?>

<?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>