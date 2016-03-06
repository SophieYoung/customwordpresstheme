<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content-full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

        </div><!-- #post-## -->
      
<!--       <div class="clearfix"> -->

        <div id="nav-below" class="navigation">

          <span class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></span>
          
          <span class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></span>

        </div><!-- #nav-below -->

<!--       </div> -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>