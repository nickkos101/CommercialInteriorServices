<?php get_header(); ?>
<main>
    <div class="column full">
        <div class="slider">
            <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slide1.jpg');">
                <div class="overlay column two-fifths">
                    <div class="slidecontent-container">
                        <h2><em>You Provide the Place</em> We <strong class="blue-text">Design</strong> the space</h2>
                        <p>Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub faceon everything hopped up on goofballs.</p>
                        <button class="blue">Learn More <i class="fa fa-angle-right"></i></button>
                        <!-- <img class="overlay-end" src="<?php echo get_template_directory_uri(); ?>/images/slider-overlay.png"> -->
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slide2.jpg');">
                <div class="overlay column two-fifths">
                    <div class="slidecontent-container">
                        <h2><em>You Provide the Place</em> We <strong class="red-text">Design</strong> the space</h2>
                        <p>Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub faceon everything hopped up on goofballs.</p>
                        <button class="red">Learn More <i class="fa fa-angle-right"></i></button>
                        <!-- <img class="overlay-end" src="<?php echo get_template_directory_uri(); ?>/images/slider-overlay.png"> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="white-wrap">
            <div class="container">
                <div class="services">
                    <div class="column fourth">
                        <h3><a href="<?php echo get_site_url(); ?>/?post_type=services">Our Services</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                    <div class="column three-fourths">
                        <?php query_posts(array('posts_per_page' => 1, 'post_type' => 'services', 'orderby' => 'rand')); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php autoc_get_gallery_start('serviceimages'); ?>
                    <?php endwhile; else: ?>
                <?php endif; ?>
            </div>
        </div>
        <hr/>
        <div class="products">
            <div class="column fourth">
                <h3><a href="<?php echo get_site_url(); ?>/?post_type=portfolio">Our Portfolio</a></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna.
                </p>
            </div>
            <div class="column three-fourths">
               <?php query_posts(array('posts_per_page' => 1, 'post_type' => 'portfolio', 'orderby' => 'rand'));
               if ( have_posts() ) : while ( have_posts() ) : the_post();
               autoc_get_gallery_start('serviceimages');
               endwhile; else: endif; ?>
           </div>  
       </div>
       <hr/>
       <div class="products">
        <div class="column fourth">
            <h3><a href="<?php echo get_site_url(); ?>/?post_type=products">Our Products</a></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna.
            </p>
        </div>
        <div class="column three-fourths">
           <?php query_posts(array('posts_per_page' => 1, 'post_type' => 'product', 'orderby' => 'rand'));
           if ( have_posts() ) : while ( have_posts() ) : the_post();
           autoc_get_gallery_start('serviceimages');
           endwhile; else: endif; ?>
       </div>  
   </div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>