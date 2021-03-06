<?php /* Template Name: Products Page */ ?>
<?php get_header(); ?>
<main>
    <div class="column full">
        <div class="white-wrap">
            <div class="container">
                <div class="column full talignleft page">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h4>
                        <div class="btn" style="background-color:<?php echo autoc_get_postdata('iconColor'); ?>">
                            <i class="fa <?php echo autoc_get_postdata('iconClass'); ?>"></i>
                        </div>
                        <?php the_title(); ?>
                    </h4>
                    <?php the_content(); ?>
                <?php endwhile; else : ?>
            <?php endif; ?>
        </div>
        <div class="services catalog">
            <?php 
            $postcounter = 1;
            query_posts(array('post_type' => 'products'));
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
            <?php if ($postcounter & 1) { ?>
            <div class="column fourth odd">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>"><div class="btn green">Learn More</div></a>
            </div>
            <div class="column three-fourths taligncenter">
                <?php autoc_get_gallery_start('serviceimages'); ?>
            </div>
            <hr/>
            <div class="column full">
                <?php autoc_get_gallery_end('serviceimages'); ?>
            </div>
            <hr/>
            <?php } else { ?>
            <div class="column three-fourths">
                <?php autoc_get_gallery_start('serviceimages'); ?>
            </div>
            <div class="column fourth even">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>"><div class="btn blue">Learn More</div></a>
            </div>
            <hr/>
            <div class="column full">
                <?php autoc_get_gallery_end('serviceimages'); ?>
            </div>
            <hr/>
            <?php } ?>
            <?php $postcounter++; ?>
        <?php endwhile; else : ?>
    <?php endif; ?>
</div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>