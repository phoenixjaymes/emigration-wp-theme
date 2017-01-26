<?php
/*
 * Template Name: Right Sidebar
 */
?>

<?php get_header(); ?>

<main class="main-content">
      
  <div class="hero-image"></div>

  <div class="main-content__wrap">
    
    <section class="main-content__primary">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no pages matched your criteria.' ); ?></p>
      <?php endif; ?> 
      
    </section>
    
    <aside class="main-content__aside--right">
      <?php get_sidebar( 'page' ); ?>
    </aside>
    
  </div>
      
</main>
  
<?php get_footer(); ?>