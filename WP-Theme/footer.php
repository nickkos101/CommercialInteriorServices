<?php $optionname = 'main_theme_options'; $mainoptions = get_option($optionname); ?>
<footer>
    <div class="gray-wrap">
        <div class="container">
            <div class="column three-fourths">
                <h4><?php echo $mainoptions['footertitle']; ?></h4>
                <p><?php echo $mainoptions['footercontent']; ?></p>
                </div>
                <div class="column fourth taligncenter">
                    <a href="<?php echo get_site_url(); ?>/contact-us"><i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
        </div>
        <div class="dark-gray-wrap">
            <div class="container">
                <div class="column three-fourths">
                    <p>Copyright 2015&copy; Commercial Interior Services</p>
                </div>
                <div class="column fourth talignright">
                    <p><a href="http://inspyregroup.com">Web Design By Inspyre</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>