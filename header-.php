<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="A SIG Software e Consultoria é reconhecida nacionalmente como tendo a equipe desenvolvedora dos melhores softwares de gestão para a área da administração pública e de instituições de ensino superior. Esta consolidação já ocorreu na UFRN onde seus membros atuaram na criação dos sistemas que tornaram a Universidade referência nacional em modernidade e eficiência.">
		<meta name="keywords" content="desenvolvimento,software,consultoria,tecnologia,informação,ti,treinamento,administração pública,software corporativo,gestão acadêmica">
		<meta name="author" content="ESIG Software">
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

		<title>ESIG Software e Consultoria em TI &#124; Muito além do software, inteligência e inovação</title>

		<!-- FONTES -->
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900|Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/materialize/css/materialize.min.css">
        <link href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/owl-carousel/assets/owl.theme.green.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lib/css/component.css">
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/js/modernizr.custom.js"></script>
		

		<!-- Custom styles for this template -->
		<link href="<?php bloginfo('template_url'); ?>/lib/css/principal.css" rel="stylesheet">
		<?php wp_head() ?>
	</head>
        <body>
       
        
        <header>
        	 <nav>
			    <div class="nav-wrapper container">
			      <a href="<?php bloginfo('url'); ?>/" class="brand-logo"></a>
			      <?php if (is_page('about-us')): ?>

			      <a href="#" data-activates="mobile-demo" class="button-collapse"></a>
			      <?php else: ?>

			      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			      <ul class="right hide-on-med-and-down">
			      	<li><a class="dropdown-button" href="#!" data-activates="dropdown1">A ESIG </a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdowndois">Soluções</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/clientes">Clientes</a></li>
			        <li><a class="dropdown-button" href="#!" data-activates="dropdowndepoimento">Depoimentos</a></li>
			      
			        <li><a href="<?php bloginfo('url'); ?>/imprensa/noticias/">Notícias</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/carreiras">Carreiras</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/contato">Contato</a></li>
			      </ul>
			      <?php endif ?>
			      <ul class="redes-top">

			      	<?php if (is_page('about-us')): ?>
         			<li><a href="<?php bloginfo('url'); ?>/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/imgs/brazil.svg" width="24"></a></li>
			        
			        <?php else: ?>
			          <li><a href="<?php bloginfo('url'); ?>/about-us" target="_blank"><img src="<?php bloginfo('template_url'); ?>/imgs/united-kingdom.svg" width="24"></a></li>
			            
			        <?php endif ?>


			      

			      	
			      	<li><a href="https://www.facebook.com/pages/SIG-Software-e-Consultoria/241538042563409" target="_blank"><img src="<?php bloginfo('template_url'); ?>/imgs/facebook-circular-logo.svg" width="24"></a></li>
			      	<li><a href="https://twitter.com/esigsoftware" target="_blank"><img src="<?php bloginfo('template_url'); ?>/imgs/social-twitter-circular-button.svg" width="24"></a></li>
			      	<li><a href="https://www.instagram.com/esigsoftware/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/imgs/instagram-ico.svg" width="24"></a></li>
			      </ul>
			      <ul class="side-nav" id="mobile-demo">
			         <li><a>A ESIG</a></li>
			          <li><a href="<?php bloginfo('url'); ?>/a-esig/a-empresa">- A empresa</a></li>
					   <li><a href="<?php bloginfo('url'); ?>/a-esig/identidade-empresarial">- Identidade Empresarial</a></li>
					   <li><a href="<?php bloginfo('url'); ?>/a-esig/um-grupo-unido-pela-inovacao-e-foco-no-cliente">- Inovação e foco no cliente</a></li>
			        <li><a>SOLUÇÕES</a></li>
			          <li><a href="<?php bloginfo('url'); ?>/educacao">- Educação</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/saude">- Saúde</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/governo">- Governo</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/gestao-empresarial">- Gestão Empresarial</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/fundacoes-de-apoio">- Fundação de Apoio</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/big-data-analitycs-e-bi">- Data Science</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/servicos-em-ti">- Serviços em TI</a></li>
					  <!-- <li><a href="<?php bloginfo('url'); ?>/projetos-de-inovacao">- Projetos de Inovação</a></li> -->


			        <li><a href="<?php bloginfo('url'); ?>/clientes">Clientes</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/imprensa/depoimentos/saude/">Depoimentos (Saúde)</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/imprensa/depoimentos/educacao/">Depoimentos (Educação)</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/imprensa/noticias/">Notícias</a></li>
			       <li><a href="<?php bloginfo('url'); ?>/carreiras">Carreiras</a></li>
			        <li><a href="<?php bloginfo('url'); ?>/contato">Contato</a></li>
			      </ul>
			    </div>
			  </nav>
        </header>
        
 
 <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php bloginfo('url'); ?>/a-esig/a-empresa">A empresa</a></li>
  <li class="divider"></li>
  <li><a href="<?php bloginfo('url'); ?>/a-esig/identidade-empresarial">Identidade Empresarial</a></li>
  <li class="divider"></li>
  <li><a href="<?php bloginfo('url'); ?>/a-esig/um-grupo-unido-pela-inovacao-e-foco-no-cliente">Um grupo unido pela inovação e foco no cliente</a></li>
</ul>



 <!-- DEPOIMENTOS DOIS -->
<ul id="dropdowndepoimento" class="dropdown-content">
   
 <li><a href="<?php bloginfo('url'); ?>/imprensa/depoimentos/saude/">Saúde</a></li>
 <li class="divider"></li>
 <li><a href="<?php bloginfo('url'); ?>/imprensa/depoimentos/educacao/">Educação</a></li>
</ul>



 <!-- Dropdown Structure -->
<ul id="dropdowndois" class="dropdown-content">
	<li><a href="<?php bloginfo('url'); ?>/educacao">Educação</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/saude">Saúde</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/governo">Governo</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/gestao-empresarial">Gestão Empresarial</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/fundacoes-de-apoio">Fundação de Apoio</a></li>
					  <li><a href="<?php bloginfo('url'); ?>/big-data-analitycs-e-bi">Data Science</a></li>
					   <li><a href="<?php bloginfo('url'); ?>/servicos-em-ti">Serviços em TI</a></li>
					  <!-- <li><a href="<?php bloginfo('url'); ?>/projetos-de-inovacao">Projetos de Inovação</a></li> -->

  
</ul>
