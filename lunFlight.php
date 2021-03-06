<!--
	lunFlight.php
	This page allows users to choose the dates they would like to fly to the 
	Moon
-->
<?php 
// displays the logo and navigation bar
include('templates/header.html');

?>




<td>
	<h2>Luna Dragon</h2>
	<form action="select.php" method="post" id="lunDirect">
		<div>
			<input type="radio" name="direction"  value="toLun" checked= "checked" >Departing Flight from Earth to Moon<br>
			<input type="radio" name="direction"  value="fromLun" >Incoming Flight from Moon to Earth<br>
			<input type="radio" name="direction"  value="bothLun" >Round-Trip Ticket<br>
		</div>
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
		<div>About the Luna Dragon</div>
		<p>The Luna Dragon is a cutting edge development from SpaceX, allowing passengers to fly to or from Moon 
		</p>
	</form>
</td>

	
	<script src="js/utilities.js"></script>
	<script src="js\lunFlight.js" type="text/javascript"></script>

<?php
// displays the pictures
include('templates/footer.html')

?>