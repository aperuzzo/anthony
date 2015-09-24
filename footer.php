
	
      <footer id="contact" class="row">
      	
	      	<article class="col-sm-6">
				<h1>Contact me</h1>
				<p>I'm always looking for opportunities to work with people. 
					Need a website fully designed and coded? How about a custom illustration or comic book?
					I'm your man!</p>
				<h2>Let's connect!</h2>
				<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/anthony/images/pen.svg" alt="Pen icon by Anthony Peruzzo">	
			</article>

	<?
		$errors = '';
		$myemail = 'anthony.peruzzo@gmail.com';//<-----Put Your email address here.
		if(empty($_POST['name'])  || 
		   empty($_POST['email']) || 
		   empty($_POST['message']))
		{
		    $errors .= "\n Error: all fields are required";
		}

		$name = $_POST['name']; 
		$email_address = $_POST['email']; 
		$message = $_POST['message']; 

		if (!preg_match(
		"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
		$email_address))
		{
		    $errors .= "\n Error: Invalid email address";
		}

		if( empty($errors)) 
		{
			// if the url field is empty 
			if(isset($_POST['url']) && $_POST['url'] == ''){
				//then send email 
		
				$to = $myemail; 
				$email_subject = "Message from AnthonyPeruzzo.com: $name";
				$email_body = "You have received a new message. ".
				" Here are the details:\n Name: $name \n Email: $email_address \n Message: \n $message"; 
				
				$headers = "From: $myemail\n"; 
				$headers .= "Reply-To: $email_address";
				
				mail($to,$email_subject,$email_body,$headers);

				echo "<META http-equiv='refresh' content='0;URL=http://anthonyperuzzo.com/thank-you/'>";
	 

		} 
			} 

	?>

	        <article id="form" class="col-sm-6">
				<form class="form-horizontal" method="post" id="contact_form" action="contact-form-handler.php">
					<div class="form-group">
					     <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"> 
					</div>
					<div class="form-group">		
						<input type="text" name="email" class="form-control" id="email" placeholder="Your Email">
					</div>
					<div class="form-group antispam">
						<input type="text" name="url" placeholder="please leave this space blank">
					</div>
					<div class="form-group">
						<textarea name="message" class="form-control" rows="4" id="message" placeholder="Your Message"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" id="submit" value="Submit">
					</div>					 	
				</form> 
			</article>
			<article class="clearfix">
				<h4>all artwork &copy; Anthony Peruzzo 2015</h4>
			</article>
		
      </footer>
    </div><!-- /container -->

    

     <?php wp_footer(); ?>

  </body>
</html>
