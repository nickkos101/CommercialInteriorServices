<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <?php $optionname = 'main_theme_options'; $mainoptions = get_option($optionname); ?>
</head>
<body>
    <div class="col-wrap">
        <header>
            <div class="dark-wrap">
                <div class="border-wrap">
                    <div class="container">
                        <div class="logo column half">
                            <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-icon.png"><h1>Commercial Interior Services</h1></a>
                        </div>
                        <div class="colors column half talignright">
                            <button onClick="location.href='<?php echo $mainoptions['instagramlink']; ?>'" class="orange"><i class="fa fa-instagram"></i></button>
                            <button onClick="location.href='<?php echo $mainoptions['twitterlink']; ?>'" class="blue"><i class="fa fa-twitter"></i></button>
                            <button onClick="location.href='<?php echo $mainoptions['fblink']; ?>'" class="red"><i class="fa fa-facebook"></i></button>
                            <button onClick="location.href='<?php echo $mainoptions['googlepluslink']; ?>'" class="green"><i class="fa fa-google"></i></button>
                            <button onClick="location.href='<?php echo $mainoptions['flickrlink']; ?>'" class="yellow"><i class="fa fa-flickr"></i></button>
                            <button onClick="location.href='<?php echo $mainoptions['youtubelink']; ?>'" class="tan"><i class="fa fa-youtube-play"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white-wrap">
               <div class="border-wrap">
                <div class="container">
                    <div class="column two-thirds">
                        <nav>
                            <?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
                        </nav>
                    </div>
                    <div class="column third talignright social-media">
                       <span>Get a Consultation | <i class="fa fa-phone-square"></i> <?php echo $mainoptions['phonenumber']; ?></span>
                   </div>
               </div>
           </div>
       </div>
   </header>