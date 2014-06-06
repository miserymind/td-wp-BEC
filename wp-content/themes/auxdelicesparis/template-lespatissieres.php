<?php
/*
Template Name: Les Pâtissières
*/

get_header(); ?>

<div class="row">
        <div class="lesPatissiere">
            <div class="container">
                <?php if ( have_posts() ) : ?>
                    <h1 class="patOne">Les patissières.... sexy</h1>
                    <h1 class="patTwo"><strong>&</strong> leurs recettes</h1>
                    <div class="resumeAll">
                        <?php 	$loop = new WP_Query( array( 'post_type' => 'patissier', 'orderby' => 'date') ); ?>
                        <div class="resume col-md-12">
                            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                                <a href="<?php the_permalink(); ?>" class="col-md-4"><?php the_post_thumbnail()?></a>
                                <?php wp_reset_query(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>