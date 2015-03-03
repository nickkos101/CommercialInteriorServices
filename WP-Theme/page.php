<?php get_header(); ?>
<main>
    <div class="column full page">
        <div class="white-wrap">
            <div class="container">
                <div class="column full talignleft">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="column three-fourths">
                        <h4>
                            <div class="btn" style="background-color:<?php echo autoc_get_postdata('iconColor'); ?>">
                                <i class="fa <?php echo autoc_get_postdata('iconClass'); ?>"></i>
                            </div>
                            <?php the_title(); ?>
                        </h4>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; else : ?>
            <?php endif; ?>
            <?php get_sidebar(); ?>
    </div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>