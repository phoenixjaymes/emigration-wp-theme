<?php get_header(); ?>

<main class="main-content">
      
  <div class="hero-image"></div>

  <div class="main-content__wrap">
    
    <h1 class="main-content__title"><?php wp_title(' '); ?> Blog Post</h1>
    
    <section class="main-content__primary">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <article class="entry">
        <header class="entry-header">
          <h2 class="entry-header__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
            
        <?php if ( get_the_post_thumbnail() ): ?>
          <div class="entry-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
        
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>

        <footer class="entry-footer">
          <ul class="entry-footer__ul">
            <li class="entry-footer__item"><?php echo get_avatar( get_the_author_meta ( 'ID' ), 24 ); ?></li>
            <li class="entry-footer__item">by <?php the_author_posts_link(); ?> |</li>
            <li class="entry-footer__item">in <?php the_category( ',' ); ?> |</li>
            <li class="entry-footer__item"><?php the_time('j M y'); ?></li>
          </ul>
        </footer>

      </article>
      
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no pages matched your criteria.' ); ?></p>
      <?php endif; ?> 
      
    </section>
    
    <aside class="main-content__aside--right">
      <?php get_sidebar(); ?>
    </aside>
    
  </div>
      
</main>
  
<?php get_footer(); ?>