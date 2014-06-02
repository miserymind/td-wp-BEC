<?php

get_header();

?>


<?php
	if(have_posts()):
	while(have_posts()):
	the_post();
	global $post;
?>



		<div class="container-block">


				<div class="englobe-article">
	
					<div class="contenu-post"><div class="titre-des-articles"><?php the_title(); ?></div>
					<p>Date posted: <?php the_date(); ?></p> <p> // <?php the_author() ?></p>
					
					<?php the_content(); ?> </div>

				</div>
				<div class="ligne"></div>
		</div>


<?php
	endwhile;
	endif;

?>

<?php

get_footer();

?>