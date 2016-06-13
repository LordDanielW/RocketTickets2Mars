<!--
	redFlight.php
	This page allows users to choose the dates they would like to fly to the 
	Mars
-->
<?php 
// displays the logo and navigation bar
include('templates/header.html');

?>



<td>
	<h2>Red Dragon</h2>
	<form action="select.php" method="post" id="redDirect">

		<h3>Please select direction of your launch</h3>
		<br>
		<div>
			<input type="radio" name="direction" value= "toRed" checked= "checked">Departing Flight from Earth to Mars<br>
			<input type="radio" name="direction" value= "fromRed" >Incoming Flight from Mars to Earth<br>
			<input type="radio" name="direction" value= "bothRed" >Round-Trip Ticket <span>*Save up to 30%</span><br>
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
		<h3>About the Red Dragon</h3>
		<p>The Red Dragon is a cutting edge development from SpaceX, allowing passengers to fly to or from Mars in just under 6 months! 
			The minimum distance between Earth and Mars only comes around ever two years.  This distance is still 33.9 million miles
			(54.6 million kilometers).  The Red Dragon's average speed for the trip is 7,800 mph!  The Red Dragon has been engineered
			to not only make this trip safe, but to make it enjoyable too.
		</p><br/><br/>
		* 30% off of VIP, 20% off of First Class, and 10% off of Coach.
	</form>
</td>

	
	<script src="js/utilities.js"></script>
	<script src="js/redFlight.js"></script>

<?php
// displays the pictures
include('templates/footer.html')

?>