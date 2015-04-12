<?php get_header();?>
<div class="row no-gutter">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4">
            <figure class="cap">
                <img src="<?php get_wp_attachment_url('full');?>"/>
                <figcaption>
                    <h2><?php the_title();?></h2>
                    <p class="icon-links">
                        <a href="#"><span class="icon-heart"></span></a>
                        <a href="#"><span class="icon-eye"></span></a>
                        <a href="#"><span class="icon-paper-clip"></span></a>
                    </p>
                    <p class="description"><?php the_field('caption');?></p>
                </figcatpion>
            </figure>
        </div>
    <?php endwhile; else : ?>
       <h1><?php _e( 'This is not a mistake, This shit does not exist. Hit the little back button.' ); ?></h1>
    <?php endif; ?>
</div>
<?php get_footer();?>