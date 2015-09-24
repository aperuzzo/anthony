<?php get_header(); ?>
<section>
  <div class="row">
    
      
        <!-- adding an aside to display an explanation of category content or bio -->
        <?php
        if (!is_paged()) {
          $args = array( 
            'post_type' => 'title',
            'category_name' => get_query_var('category_name') 
            );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            echo '<div class="col-sm-4 col-sm-push-8">';
            echo '<div class="cell-aside">';
            echo '<h2>';
            echo the_title();
            echo '</h2>';
            echo '<p>';
            echo the_content();
            echo '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="col-sm-8 col-sm-pull-4 featured">';
          endwhile;
        }
        ?>
        <?php wp_reset_postdata(); ?>
  
    <?php if (is_paged()) {echo '<div>';} ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    
      <!-- pagination -->
      <div class="align-center">
        <?php
            if (function_exists(custom_pagination)) {
              custom_pagination($custom_query->max_num_pages,"",$paged);
            }
        ?>
      </div>
      <?php the_content(); ?>
    
      <?php endwhile; ?>
      <!-- pagination -->
      <div class="align-center">
        <?php
            if (function_exists(custom_pagination)) {
              custom_pagination($custom_query->max_num_pages,"",$paged);
            }
        ?>
      </div>
      <div class="cell-comments">
        <!-- adding comments -->  
        <?php
        $wp_query->is_single = true;
        comments_template();
        $wp_query->is_single = false;
        ?>
      </div>

      <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>

  </div><!-- end row -->
  

  
    
  
  
    

</section>
<?php get_footer(); ?>