<?php get_header(); ?>

<main class="main-content">
  
  <?php if ( has_post_thumbnail() ): ?>
    <div class="hero-image">
      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Hero Image">
    </div>
  <?php endif; ?>

  <div class="main-content__wrap--no-sidebar">
    <section>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?> 
      
    </section>
  </div>
      
</main>
  
<?php get_footer(); ?>