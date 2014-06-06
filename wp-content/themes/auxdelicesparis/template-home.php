<?php
/*
Template Name: Homepage
*/

get_header(); ?>

    <div class="row homepage">
        <div class="concept">
            <div class="container">
                <h1>Le concept</h1>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/conceptImgLeft.png" alt=""/>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/conceptImgCenter.png" alt=""/>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/conceptImgRight.png" alt=""/>
                    </div>
                </div>
                <div class="col-md-12">
                    <p><?php the_field('le_concept') ?></p>
                </div>
            </div>
            <div class="patissiere">
                <div class="container">
                    <?php if ( have_posts() ) : ?>
                        <h1 class="patOne">Les patissières.... sexy</h1>
                        <h1 class="patTwo"><strong>&</strong> leurs recettes</h1>
                        <div class="resumeAll">
                            <?php 	$loop = new WP_Query( array( 'post_type' => 'patissier', 'posts_per_page' => 6) ); ?>
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
            <div class="contact">
                <div class="container">
                    <h1 class="patOne">Tu veux contacter</h1>
                    <h1 class="patTwo">les pâtissières ?</h1>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="text" placeholder="Nom" class="input-large">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="text" placeholder="Prénom">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </idv>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>