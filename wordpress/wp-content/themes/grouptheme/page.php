<!-- Detta är för sidor. -->

<?php get_header(); ?>

<div class="page-content">
    <?php the_content(); ?>


    <?php 
        if(have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
            <div class="shop-container">
            <?php the_content(); ?>
            </div>
        <?php
        endwhile;
    else: _e('Det finns inga produkter.');
    endif;
        ?>
</div>


<?php get_footer(); ?>  