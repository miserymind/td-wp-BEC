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
        </div>
    </div>

<?php get_footer(); ?>