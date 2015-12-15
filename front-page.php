<?php get_header(); ?>
 <div id="load-wrap">
  <div id="cir-outer">
    <div id="cir">
      <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/anthony/images/skull.svg" alt="loading graphic">
    </div>
  </div>
</div>
<header class="row">
	<div class="contain">
		<div id="mainLogo">
			<div id="badge">
				<h1>Hello, I'm</h1>
				<h1 id="anthony">Anthony Peruzzo</h1>
				<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/anthony/images/header-logo.svg" class="img-responsive" alt="Anthony Peruzzo logo">
				<h2>I'm an Artist and Web Developer</h2>
			</div>

			<div id="dn">
				<h3>my work</h3>
				<div id="dnBtn">
					<i class="fa fa-arrow-circle-down"></i>
				</div>
			</div>
		</div>
		
		<ul id="slideshow">
			<li id="picture-1" class="current"></li>
			<li id="picture-2"></li>
			<li id="picture-3"></li>
			<li id="picture-4"></li>
		</ul>
	</div>
</header>
<section id="web" class="row">
	<article id="outline" class="row"> 
	
		<h2>Take a look at my Sites</h2>
		<h3>I designed and developed them all</h3>
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
		      
		      echo '<div class="col-md-6 thumbnail chalk-circle">';
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
				<h3>My Skills</h3>
				<ul>
					<li>HTML/CSS</li>
					<li>Javascript/JQUERY</li>
					<li>Wordpress</li>
					<li>Responsive Design</li>
					<li>Adobe Creative Suite</li>
				</ul>
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
			<p>Anthony Peruzzo is an Artist and Web Developer currently residing in Minneapolis, MN.</p> 
			<p>He has created websites for Ace in 1 Media, The Griffin Gallery, artist John Bivens and many more.</p> 
			<p>He is a published artist of graphic novels (predominately through publisher Image Comics) and has a freelance design and illustration practice. Past 
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