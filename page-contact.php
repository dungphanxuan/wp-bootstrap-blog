<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-bootstrap-blog
 */

get_header(); ?>

	<div class="row">
		<div class="col-md-12">
			<h3>Contact us!</h3>
		</div>
		<form role="form" action="" method="post" >
			<div class="col-lg-6">
				<div class="form-group">
					<label for="InputName">Your Name</label>
					<div class="input-group">
						<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
				</div>
				<div class="form-group">
					<label for="InputEmail">Your Email</label>
					<div class="input-group">
						<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
				</div>
				<div class="form-group">
					<label for="InputMessage">Message</label>
					<div class="input-group"
					>
						<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
				</div>
				<div class="form-group">
					<label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
					<div class="input-group">
						<input type="text" class="form-control" name="InputReal" id="InputReal" required>
						<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
				</div>
				<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
			</div>
		</form>
		<hr class="featurette-divider hidden-lg">
		<div class="col-lg-5 col-md-push-1">
			<address>
				<h3>Office Location</h3>
				<p class="lead"><a href="http://google.com">The Company<br>
						Washington, DC 20301</a><br>
					Phone: XXX-XXX-XXXX<br>
					Fax: XXX-XXX-YYYY</p>
			</address>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
