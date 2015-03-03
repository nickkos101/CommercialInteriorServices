<?php get_header(); ?>
<main>
    <div class="column full">
        <div class="white-wrap">
            <div class="container">
                <div class="services catalog">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="column fourth odd">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="column three-fourths">
                        <?php the_content(); ?>
                    </div>
                    <hr/>
                    <div class="column full">
                         <?php autoc_get_gallery_start('serviceimages'); ?>
                        <?php autoc_get_gallery_end('serviceimages'); ?>
                    </div>
                    <hr/>
                <?php endwhile; else : ?>
            <?php endif; ?>
            <hr/>
        </div>
    </div>
</div>
</div>
</main>
<?php get_footer(); ?>