<?php get_header();  ?>

  <div class="hero"></div>


<div class="main">
  <div class="container">

    <div class="content-full">
    
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        
      <?php endwhile; // end the loop?>

    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>