<!DOCTYPE html>
<html lang="en">
  <head>
          <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
          <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
          <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
          <link rel="pingback" href="<?php bloginfo('pingback url'); ?>" /> 
          <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> 
          <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
   <!--    here should be code from word press but it wasn't  do the font so i don't know what should i do -->
          <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
          <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
          <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-rtl.min.css" type="text/css" media="screen" />


 <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  wp_head();
?>

  </head>
<input type="text" id="tmp_url" hidden="" value="<?php bloginfo('template_directory'); ?>"/>

  <body>

  <div class="container">

  <div class="row loogo">
    <div class="col-md-6 col-md-offset-4 hidden-xs">  
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/images/logo.png"
             width="125"
             class="img-circle img-thumbnail"
             alt="قرطبة إنفوجرافيك" 
             title="<?php bloginfo('name'); ?>">
        </a>
        <span class="site-title">قرطبة إنفوجرافيك</span>
    </div>
     

  </div>
  <div class="row">
    <nav class="navbar navbar-default">
     <div class="container">
         <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
       </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav the-pages">
       <li><a id="aboutcordoba">عن قرطبة</a></li>
       <li><a id="infographic">عن الإنفوجرافيك</a></li>
       <li><a id="share">شارك</a></li>
       <li><a id="contactus">اتصل بنا</a></li>

     </ul>
     </div>
   </div>
  </nav>

  </div>


<div class="" id="information">
  
</div>
