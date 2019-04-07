<?php get_header(); ?>

<div id="solPanel">
        <!-- postlar -->
        <div id="yaziPaneli">
            <!-- yazi içeriği buraya -->
            <h1 id="yaziBasligi"> <?php single_post_title(); ?> 

</h1>
            <div class="bilgiYazar">
                <ul class="yaziBilgileri">
                    <li class="yaziBilgileri"><i class="fas fa-calendar-alt"></i>&nbsp;<?php print the_date('Y-m-d'); ?></li>
                    <li class="yaziBilgileri"><i class="fas fa-pen-square"></i>&nbsp;<?php  the_author(); ?></li>
                    <li class="yaziBilgileri"><i class="fas fa-map-marker-alt"></i>&nbsp;<?php print the_category( ', ' ); ?></li>
                </ul>
            </div>
            <?php if ( has_post_thumbnail() ) : ?>
            <img class="asilResim" src="<?php the_post_thumbnail_url(); ?>"/>
<?php endif; ?>  
            <br />
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Boş.</p>
<?php endif; ?>
            <!-- buraya kadar yazi içeriği-->
            <!-- biraz paylaşımcılık -->
            <!-- Twitter -->
<a href="http://twitter.com/share?url=<?php print the_permalink(); ?>&text= <?php single_post_title(); ?> &via=<?php the_author(); ?>" target="_blank" class="paylas-btn twitter">
    <i class="fab fa-twitter-square"></i>
</a>



<!-- Facebook -->
<a href="http://www.facebook.com/sharer/sharer.php?u=<?php print the_permalink(); ?>" target="_blank" class="paylas-btn facebook">
    <i class="fab fa-facebook"></i>
</a>

<!-- StumbleUpon (url, title) -->
<a href="http://www.stumbleupon.com/submit?url=<?php print the_permalink(); ?>&title= <?php print single_post_title(); ?> " target="_blank" class="paylas-btn stumbleupon">
    <i class="fab fa-stumbleupon"></i>
</a>

<!-- Reddit (url, title) -->
<a href="http://reddit.com/submit?url=<?php print the_permalink(); ?>&title= <?php print single_post_title(); ?> " target="_blank" class="paylas-btn reddit">
    <i class="fab fa-reddit"></i>
</a>

<!-- LinkedIn -->
<a href="http://www.linkedin.com/shareArticle?url=<?php print the_permalink(); ?>&title= <?php print single_post_title(); ?> &summary=<SUMMARY>&source=<SOURCE_URL>" target="_blank" class="paylas-btn linkedin">
    <i class="fab fa-linkedin"></i>
</a>

<!-- Email -->
<a href="mailto:?subject= <?php print single_post_title(); ?> &body=<?php print the_permalink(); ?>" target="_blank" class="paylas-btn email">
    <i class="fa fa-envelope"></i>
</a><div class="temizle"></div><br />
            <!-- paylaşım buraya kadar-->

        </div>

      
        <!-- postlar son-->
        <!-- SAYFALAMA SİSTEMİ BURAYA GELECEK -->
</div>







<?php get_sidebar(); ?>
<?php get_footer(); ?>