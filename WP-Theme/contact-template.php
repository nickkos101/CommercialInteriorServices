<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<?php $optionname = 'main_theme_options'; $mainoptions = get_option($optionname); ?>
<main>
    <div class="column full page">
        <div class="white-wrap">
            <div class="container">
                <div class="column full talignleft">
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <div class="column three-fourths">
                    <h4>
                        <div class="btn red">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <?php the_title(); ?>
                    </h4>
                    <?php the_content(); ?>
                     <?php echo do_shortcode('[ninja_forms_display_form id=1]'); ?>
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