<?php get_header(); ?>

<main class="main-content">

  <div class="main-content__wrap">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <section class="main-content__primary">
      
      <?php the_field('images'); ?>
      
    </section>
    
    <aside class="main-content__aside--right">
      
      <h2><?php the_title(); ?></h2>
      
      <?php the_field('description'); ?>
      
      <hr>
      
      <p>
        <?php previous_post_link(); ?> - 
        <a href="<?php bloginfo('url'); ?>/destinations">Destinations</a> -
        <?php next_post_link(); ?>
      </p>
      
    </aside>
    
    <?php endwhile; endif; ?> 
    
  </div>
      
</main>
  
<?php get_footer(); ?>