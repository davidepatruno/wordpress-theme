<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-10">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post_wrapper">
          <h1 title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </h1>
            <h3>Scritto da: <?php the_author() ?></h3>
            <small><?php the_time('Y-m-d H:m:s'); ?></small>
            <p class="testo"><?php the_content(); ?></p>
            <small><?php the_category(); ?></small>
        </div>
        <?php endwhile; else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>
      </div>
      <div class="col-2">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
