<div class="col s12 m6 l4">
					<div class="row">
						<div class="col s12">
							<h1 class="titulo-interna">quem usa</h1>

							<p>Aqui estão algumas instituições que usam nossas soluções.</p>
						</div>
					</div>



 
<!-- EDUCAÇÃO -->

<?php if (is_tax('categories_services', 'educacao')): ?>
	
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

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

      <?php elseif (is_tax('categories_services', 'fundacoes-de-apoio')): ?>

       
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

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

      <?php elseif (is_tax('categories_services', 'institutos-federais-de-educacao')): ?>

       
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('119')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

      <?php elseif (is_tax('categories_services', 'secretarias-estaduais-de-educacao')): ?>

        
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

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

      <?php elseif (is_tax('categories_services', 'secretarias-municipais-de-educacao')): ?>

       
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

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

      <?php elseif (is_tax('categories_services', 'universidades-estaduais')): ?>

        
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

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

      <?php elseif (is_tax('categories_services', 'universidades-federais')): ?>

       
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

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


<!-- SAÚDE -->

<?php elseif (is_tax('categories_services', 'saude')): ?>

	
					<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('15')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

      <?php elseif (is_tax('categories_services', 'clinicas-de-fisioterapia')): ?>

     <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('15')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

      <?php elseif (is_tax('categories_services', 'clinicas-medicas')): ?>

      <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('15')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

      <?php elseif (is_tax('categories_services', 'policlinicas')): ?>

     <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('15')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


<!-- GOVERNO -->
<?php elseif (is_tax('categories_services', 'governo')): ?>

	<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('16')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

    <?php elseif (is_tax('categories_services', 'folha-de-pagamento')): ?>

     <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('16')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


    <?php elseif (is_tax('categories_services', 'gestao-administrativa')): ?>

     <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('16')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


    <?php elseif (is_tax('categories_services', 'governo-eletronico')): ?>

      <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('16')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


    <?php elseif (is_tax('categories_services', 'recursos-humanos')): ?>

     <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('16')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


    <?php elseif (is_tax('categories_services', 'servicos-de-tecnologia')): ?>

     <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('16')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>



<!-- PROJETOS DE INOVAÇÃO -->
<?php elseif (is_tax('categories_services', 'projetos-de-inovacao')): ?>

  <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('21')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>



<!-- GESTÃO  EMPRESARIAL-->
<?php elseif (is_tax('categories_services', 'gestao-empresarial')): ?>

	<ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('17')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


    <?php elseif (is_tax('categories_services', 'quarkerp')): ?>

    <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('17')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

    <?php elseif (is_tax('categories_services', 'quarkrh')): ?>

   <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('17')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

    <?php elseif (is_tax('categories_services', 'suite-quark')): ?>

    <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('17')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


<!-- FUNDAÇÃO -->
<?php elseif (is_tax('categories_services', 'fundacao-de-apoio')): ?>

 <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('18')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


<!-- BIG -->
<?php elseif (is_tax('categories_services', 'big-data-analitycs-e-bi')): ?>

 <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

        <?php elseif (is_tax('categories_services', 'cloud-computing')): ?>

       <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

        <?php elseif (is_tax('categories_services', 'desenvolvimento-sob-encomenda')): ?>

       <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

        <?php elseif (is_tax('categories_services', 'gold-bi')): ?>

       <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

        <?php elseif (is_tax('categories_services', 'gold-i2')): ?>

        <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>
        <?php elseif (is_tax('categories_services', 'gold-reports')): ?>

       <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

        <?php elseif (is_tax('categories_services', 'sigdocs')): ?>

        <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>

        <?php elseif (is_tax('categories_services', 'treinamentos')): ?>

        <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('19')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>



<!-- SERVIÇOS EM TI -->
<?php elseif (is_tax('categories_services', 'servicos-em-ti')): ?>

 <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('20')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


<!-- PROJETOS DE INOVAÇÃO -->
<?php elseif (is_tax('categories_services', 'projetos-de-inovacao')): ?>

  <ul class="outras-instituicoes">

						<?php query_posts(array( 'orderby' => 'rand','showposts' => '4','post_type' => 'clientes',

						'tax_query' => array(
						        array(
						            'taxonomy' => 'empresas', //or tag or custom taxonomy
						            'field' => 'id',
						            'terms' => array('21')
						        )
						    )

					)); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<li><img src="<?php the_field('logo_da_empresa'); ?>"></li>
						<?php endwhile; endif; ?>
         					<?php wp_reset_query(); ?>

					</ul>


<?php else: ?>

	

<?php endif ?>






					



























					<div class="row">
						<div class="col s12">
							<a class="waves-effect waves-light btn-large bgint" href="<?php bloginfo('url'); ?>/clientes">veja mais</a>
						</div>
					</div>
				</div><!---.col s12 m6 l4-->