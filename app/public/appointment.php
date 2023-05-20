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
		<div class="col-12 text-center mt-5"><h3>Annointment Center</h3>
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h2 class="text-center">Appointment Center</h2> 
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" name="phone" required>
				</div>
				<div class="form-group">
					<label for="vehyear">Vehicle Year</label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="make">Vehicle Make</label>
					<input type="text" class="form-control" id="make" name="make" required>
				</div>
				<div class="form-group">
					<label for="model">Vehicle Model</label>
					<input type="text" class="form-control" id="model" name="model" required>
				</div>
				<div class="form-group">
					<label for="trim">Vehicle Trim</label>
					<input type="text" class="form-control" id="trim" name="trim" required>
				</div>
				<div class="form-group">
					<label for="plate">Vehicle Plate Number</label>
					<input type="text" class="form-control" id="plate" name="plate" required>
				</div>
				<div class="form-group">
					<label for="month">Month</label>
						<select name="month" id="month">
							<option value="jan">January</option>
							<option value="feb">February</option>
							<option value="mar">March</option>
							<option value="apr">April</option>
							<option value="may">May</option>
							<option value="june">June</option>
							<option value="july">July</option>
							<option value="aug">August</option>
							<option value="sep">September</option>
							<option value="oct">October</option>
							<option value="nov">November</option>
							<option value="dev">December</option>
						</select>
				</div>
				<div class="form-group">
					<label for="day">Day</label>
						<select name="day" id="day">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
				<div class="form-group">
					<label for="year">Year</label>
						<select name="year" id="year">
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
						</select>
				</div>
				<div class="form-group">
					<label for="time">Preferred Time (Please note actual time may vary by 30-60 minutes)</label>
					<input type="text" class="form-control" id="time" name="time" required>
				</div>
				<div class="form-group">
					<label for="service">Service & Price</label>
						<select name="service" id="service">
							<option value="engine">Engine Diagnostics: $50.00 - $250.00</option>
							<option value="brakes">Brake Repair: $100.00 - $300.00</option>
							<option value="oil">Oil Changes: $40.00 - $100.00</option>
							<option value="suspension">Suspension & Steering: $100.00 - $500.00</option>
							<option value="transmission">Transmission Service: Starting at $120.00</option>
							<option value="ac">AC & Heating: $100.00 - $500.00</option>
							<option value="tires">Tire Services: Starting at $40.00/tire</option>
							<option value="battery">Battery Services: Starting at $80.00</option>
							<option value="eds">Electrical System Diagnostics: $100.00 - $300.00</option></select>
				</div>
				<a class="btn btn-primary" href="success.php">Submit</a>
			</div>
		</div>
	</div>
</div>

	<?php include 'includes/navbar.php'; ?>


	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>

</body>
</html>
