 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        
   <div class="parallax-container">
      <div class="parallax"><img src="<?php bloginfo('template_url'); ?>/imagens/bg-paralax-governo.jpg"></div>
    </div>
	
	<section class="sessao-conteudo">
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l9">
					<h1 class="titulo-interna">POst type serviços</h1>
					<ul class="migalhas">
						<li><span><a href="<?php bloginfo('url'); ?>/">HOME</a></span></li>
						<li><span><?php the_category( ' ' ); ?></span> </li>
						
					
					</ul>

					
				
<h4 class="soluc">Soluções:</h4>


<?
$args = array(
    'show_option_all' => '', 
    'show_option_none' => __('No categories'),
    'orderby' => 'name', 
    'order' => 'ASC',
    'style' => 'list',
    'show_count' => 0, 
    'hide_empty' => 1,
    'use_desc_for_title' => 1, 
    'child_of' => 0,
    'feed' => '', 
    'feed_type' => '',
    'feed_image' => '', 
    'exclude' => '',
    'exclude_tree' => '', 
    'current_category' => 0,
    'hierarchical' => true, 
    'title_li' => '',
    'hide_title_if_empty' => false,
    'echo' => 1, 
    'depth' => 0,
    'separator' => '<br />',
    'taxonomy' => 'tipos'
);
wp_list_categories($args);

?>




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