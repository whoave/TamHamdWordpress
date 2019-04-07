<?php get_header(); ?>

<div id="solPanel">
        <!-- postlar -->
<?php while ( have_posts() ) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
        <div class="icerik"> 
     
        <?php if ( has_post_thumbnail() ) : ?>
	<img src="<?php the_post_thumbnail_url(); ?>"/><?php print_post_title() ?>
<?php endif; ?>  
            <span id="icIc"> <?php print the_excerpt(); ?></span><br /> 
           <span class="oku"><i class="fas fa-feather-alt"></i>&nbsp; <?php  the_author(); ?> &nbsp; &nbsp; <i class="fab fa-readme">&nbsp;</i><?php print the_date(); ?></span>
        </div>
  </article>
<?php endwhile; ?>

<div style="margin: 0 auto;text-align:center;">
<?php print get_next_posts_link();print get_previous_posts_link(); ?>
</div>

      
        <!-- postlar son-->
</div>







<?php get_sidebar(); ?>
<?php get_footer(); ?>