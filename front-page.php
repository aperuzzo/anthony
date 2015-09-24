<?php get_header(); ?>
<header>
	<h1>Hello, I'm <span id="anthony">Anthony Peruzzo</span></h1>
	<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/anthony/images/header-logo.svg" class="img-responsive" alt="Anthony Peruzzo logo">
</header>
<section id="web" class="row">
	<article id="outline" class="row"> 
	
		<h2>I'm a Web Designer/ Developer</h2>
		<h3>check out my websites</h3>
		<div class="col-lg-8">
		<!-- thumbs of images on left custom post type title?-->
			<?php

		    $args = array( 
		      'post_type' => 'post',
		      'category_name' => 'web',
		      'posts_per_page' => 5 
		      );
		    $loop = new WP_Query( $args );
		    while ( $loop->have_posts() ) : $loop->the_post();
		      
		      echo '<div class="col-sm-6 thumbnail chalk-circle">';
		      echo '<div class="thumb clearfix">';
		      echo '<a href="';
		      echo the_permalink();
		      echo '">';
		      echo '<figure class="gallery-item">';
		      echo the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive' ));
		      echo '<figcaption class="img-title">';
		      echo '<h1>';
		      echo the_title();
		      echo '</h1>';
		      //echo the_excerpt();
		      echo '</figcaption>';
		      echo '</figure>';
		      echo '</a>';
		      echo '</div>';
		      echo '</div>';
		    endwhile;
		    ?>
		    <?php wp_reset_postdata(); ?>
		</div>
		<div class="clearfix visible-sm-block visible-md-block"></div>
		<aside class="col-lg-4 center-col">
			<div class='aside-text'>
			<h3>MY SKILLS</h3>
			<ul>
				<li>HTML/CSS</li>
				<li>Javascript/JQUERY</li>
				<li>wordpress</li>
				<li>responsive design</li>
				<li>Adobe Creative Suite</li>
			</ul>
			<!--<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/anthony/images/mug-brush.svg" class="center-block"> -->
			</div>
		</aside>
	</article>
</section>
<section id="illustration" class="row">
	<div class="container">
		<h2>I'm an Illustrator Too</h2>
		<h3>check out my comics</h3>
		<div id="comic-outline" class="row">
			<!-- thumbs leading to comic posts -->
			<?php

		    $args = array( 
		      'post_type' => 'title', 
		      'posts_per_page' => 10,
		      'cat' => -7 
		      );
		    $loop = new WP_Query( $args );
		    while ( $loop->have_posts() ) : $loop->the_post();
		      
		      $name = get_the_category();
		      
		      echo '<div class="col-sm-6 thumbnail blue-outline">';
		      echo '<div class="thumb-ill clearfix">';
		      echo '<a href="category/';
		      echo $name[0]->slug;
		      echo '">';
		      echo '<figure class="gallery-item">';
		      echo the_post_thumbnail();
		      echo '<figcaption class="img-title-ill">';
		      echo '<h1>';
		      echo the_title();
		      echo '</h1>';
		      echo '</figcaption>';
		      echo '</figure>';
		      echo '</a>';
		      echo '</div>';
		      echo '</div>';
		    endwhile;
		    ?>
		    <?php wp_reset_postdata(); ?>
		</div>
	</div>	
		
	

</section>
<section id="about" class="row">
	<div id='about-outline' class="row">
		<h2>About</h2>
		<div class="col-sm-6" id="about-info">
			<p>Anthony Peruzzo is an Artist and Web Developer currently residing in Minneapolis, MN. He has created websites for
				Ace in 1 Media, The Griffin Gallery, artist John Bivens and many more. He is a published artist of graphic novels
				(predominately through publisher Image Comics). He also has a freelance design and illustration practice. Past 
				clients include: Charter Media, Make Westing (pub in Oakland, CA), Black Box TV, and many private individuals.</p>
			<p>Please use the contact form to inquire for services.</p>
		</div>
		<div class="col-sm-6">
			<h3>Education</h3>
			<ul>
				<li>
					<h4>University of Texas @ Austin MFA 2001</h4>
					<p>Master of Fine Art in Applied Visual Arts with concentrations in printmaking and drawing</p>
				</li>
				<li>
					<h4>Oregon State University BFA 1997</h4>
					<p>Bachelor of Fine Art in Fine Art with concentrations in printmaking, drawing, and photography</p>
				</li>
				<li>
					<h4>Minneapolis College of Art and Design 2013-present</h4>
					<p>Various courses in design and web development</p>
				</li>
			</ul>
		</div>
	</div>
</section>


<?php get_footer(); ?>