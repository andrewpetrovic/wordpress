
	<?php get_header();?>
	<!-- Column 1 / Content -->
	<div class="grid_8">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel porta erat. Quisque sit amet risus at odio pellentesque sollicitudin. Proin suscipit molestie facilisis. Aenean vel massa magna. Proin nec lacinia augue. Mauris venenatis libero nec odio viverra consequat. In hac habitasse platea dictumst.</p>
		<!-- Contact Form -->
		<form action='index.html' method='post' id='contact_form'>
			<h3>Contact Form</h3>
			<div class="hr dotted clearfix">&nbsp;</div>
			<ul>
				<li class="clearfix">
					<label for="name">Name</label>
					<input type='text' name='name' id='name' />
					<div class="clear"></div>
					<p id='name_error' class='error'>Insert a Name</p>
				</li>
				<li class="clearfix">
					<label for="email">Email Address</label>
					<input type='text' name='email' id='email' />
					<div class="clear"></div>
					<p id='email_error' class='error'>Enter a valid email address</p>
				</li>
				<li class="clearfix">
					<label for="subject">Subject</label>
					<input type='text' name='subject' id='subject' />
					<div class="clear"></div>
					<p id='subject_error' class='error'>Enter a message subject</p>
				</li>
				<li class="clearfix">
					<label for="message">Message</label>
					<textarea name='message' id='message' rows="30" cols="30"></textarea>
					<div class="clear"></div>
					<p id='message_error' class='error'>Enter a message</p>
				</li>
				<li class="clearfix">
					<p id='mail_success' class='success'>Thank you. I'll get back to you as soon as possible.</p>
					<p id='mail_fail' class='error'>Sorry, an error has occured. Please try again later.</p>
					<div id="button">
						<input type='submit' id='send_message' class="button" value='Submit' />
					</div>
				</li>
			</ul>
		</form>
	</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>