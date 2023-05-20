<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
	<style>
		form {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class=row mt-5>
			<div class="col-12 text-center mt-5">
				<h3>Contact Us</h3>
	<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h2 class="text-center">Contact Us</h2> 
			<form method="post" action="send_email.php">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

	<?php include 'includes/navbar.php'; ?>


	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>
