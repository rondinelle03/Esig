<?php
    if( get_post_type() == 'services' ): // Se o post type foi services
		get_template_part('single','services'); // Vai carregar o arquivo single-services.php
	endif;
 
	if( get_post_type() == 'post' ): // Se o post type foi post
		get_template_part('single','padrao'); // Vai carregar o arquivo single-padrao.php
	endif;
?>