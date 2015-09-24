<?php get_header(); ?>

  <section id="single">
    
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
  	  <div class="row cell-comments">
        <div class="content-center">
	       <?php the_content(); ?>
         <?php 
         if (! in_category( array('4', '16'))) {
            $name = get_the_category();
            echo '<a href="../category/';
            echo $name[0]->slug;
            echo '">';
            echo 'Back to the ';
            echo $name[0]->name;
            echo ' page';
            echo '</a>';
          } else if (in_category(16)) {
            $name = get_the_category();
            echo '<a href="../../category/';
            echo $name[0]->slug;
            echo '">';
            echo 'View the complete ';
            echo $name[0]->name;
            echo ' story here';
            echo '</a>';
          }
        ?>
       </div>
         
      </div><!-- end row -->
      
  	  
  	    <?php endwhile; else: ?>
  	      <p><?php _e('Sorry, this page does not exist.'); ?></p>
  	    <?php endif; ?>
      <div class="row cell-comments">
        <?php comments_template(); ?>
      </div><!--end row -->
  	
</section>

<?php get_footer(); ?>