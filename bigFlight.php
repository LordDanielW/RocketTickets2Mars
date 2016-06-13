<!--
	bigFlight.php
	This page allows users to choose the dates they would like to fly to the 
	BIGELOW Space Station
-->
<?php 
// displays the logo and navigation bar
include('templates/header.html');

?>




<td>
	<h2>Big Dragon</h2>
	<form action="select.php" method="post" id="redDirect">
		<h3>Please select direction of your launch</h3>
			<br>
		<div>
			<input type="radio" name="direction"  value= "toBIG" checked= "checked" >Departing Flight from Earth to Bigelow<br>
			<input type="radio" name="direction"  value= "fromBIG" >Incoming Flight from Bigelow to Earth<br>
			<input type="radio" name="direction"  value= "bothBIG" >Round-Trip Ticket<br>
		<div>
		<br><br>
		<h3>Please select your launch month</h3>
		We are currently selling ticket for 2018 to 2021<br/>
		<table>
			<td>
				<h4>Departing Rockets</h4>
				Please enter the date in a yyyy-mm format
					<p>Date: <input type="text" name="monthpicker1" id="monthpicker1" required></p>
				
			</td>
			<td id = "roundTrip">
				<h4>Return Rockets (Round Trip Flights Only)</h4><br/>
				
					<p>Date: <input type="text" name="monthpicker2" id="monthpicker2" ></p>
						
		</td>		
		</table>
		<br>
		<input class="button" type="submit" value="Search Tickets">
		<br><br>
		<div>About the Bigelow Dragon</div>
		<p>The Bigelow Dragon is a cutting edge development from SpaceX, allowing passengers to fly to or from the Bigelow Space Station
		</p>
	</form>
</td>

	<script src="js/utilities.js"></script>
	<script src="js\bigFlight.js" type="text/javascript"></script>

<?php
// displays the pictures
include('templates/footer.html')

?>