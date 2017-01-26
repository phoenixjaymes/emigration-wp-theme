<?php
/*
 * Template Name: Destinations Page
 */
?>

<?php get_header(); ?>

<main class="main-content">

  <div class="main-content__wrap--no-sidebar">
    <section>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      
      <?php endwhile; endif; ?>
      
    </section>
    
    <section>
      <?php
        $args = array(
          'post_type' => 'destinations'
        );
        
        $query = new WP_Query( $args );
      ?>
      
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      
      <div>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?> 
      
    </section>
  </div>
      
</main>
  
<?php get_footer(); ?>