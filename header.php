<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo('name'); ?></title>
<?php wp_head();?>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php wp_nav(); ?>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-3">
                    <figure>
                        <figcaption>
                            <?php the_field('caption');?>
                        </figcatpion>
                        <img src="<?php get_wp_attachment_url('full');?>"/>
                    </figure>
                </div>
            <?php endwhile; else : ?>
	           <h1><?php _e( 'This is not a mistake, This shit does not exist. Hit the little back button.' ); ?></h1>
            <?php endif; ?>
        </div>