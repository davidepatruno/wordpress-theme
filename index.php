<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post_wrapper anteprima">
          <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
            <small><?php the_time('Y-m-d H:m:s'); ?></small>
            <p class="short"><?php the_excerpt(); ?></p>
        </div>
        <?php endwhile; else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>
      </div>
      <div class="col-4 side_widg">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
