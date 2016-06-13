<!--
	confirmation.php
	This page submits the users payment information to the database for processing
-->
<?php
// displays the logo and navigation bar
include('templates/header.html');
//establishes database connection
include('Templates/connection.php');

	$chargeAmount = $_SESSION['chargeAmount'];
	$seat_type = $_SESSION['seatType'];
	$query = "SELECT * FROM users WHERE user_id = '" .$_SESSION['user_id'] . "'";
	//echo $query;
	$result = mysqli_query($dbc, $query);
	
	$userInfo = mysqli_fetch_assoc($result); 
		/* free result set */
	mysqli_free_result($result);
	
	$firstName = $userInfo['firstName'];
	$lastName = $userInfo['lastName'];
	$address = $userInfo['address1'];
	$city =  $userInfo['City'];
	$state =  $userInfo['State'];
	$zipCode =  $userInfo['zip'];
	
	$description = $_POST['description'];
	$cardName = $_POST['cardName'];
	$cardNumber = $_POST['cardNumber'];
	$CVC = $_POST['CVC'];
	$expiration1 = $_POST['expiration1'];
	$expiration2 = $_POST['expiration2'];
	
	$toFlight = $_SESSION['toFlight'];
	$flight_idTo = $toFlight['flight_id'];
	$user_id = $_SESSION['user_id'];
	
	if($seat_type == 'VIP')
	{
		$soldSeat = 'soldAseats';
	} else if($seat_type == 'firstClass')
	{
		$soldSeat = 'soldBseats';
	} else if($seat_type == 'coach')
	{
		$soldSeat = 'soldCseats';
	}
	
	if(isset($_SESSION['returnFlight'])) // Round Trip Flight
	{ 
		$returnFlight = $_SESSION['returnFlight'];
		$flight_idFrom = $returnFlight['flight_id'];
		$query = "INSERT INTO payments (flight_idTo, flight_idFrom, user_id, description, cardName, cardNumber, CVC, expiration1,
			expiration2, chargeAmount, seat_type )				
			VALUES ('$flight_idTo', '$flight_idFrom', '$user_id', '$description', '$cardName', '$cardNumber', '$CVC', '$expiration1', '$expiration2', '$chargeAmount', '$seat_type' )
			";

	} else { // One Way Flight
		$query = "INSERT INTO payments (flight_idTo, user_id, description, cardName, cardNumber, CVC, expiration1,
			expiration2, chargeAmount, seat_type )				
			VALUES ('$flight_idTo', '$user_id', '$description', '$cardName', '$cardNumber', '$CVC', '$expiration1', '$expiration2', '$chargeAmount', '$seat_type' )
			";
	}

?>

	<td>    
		
		<?php
		
				
		                //Send to database. Something like:
            
                        
                if (mysqli_query($dbc, $query)) {
                    print '<p>Thank You for choosing SPACEX for your space travels, a confirmation email will be sent shortly! </p>';
                } else {
                    print '<p style="color: red;">Error:' . mysqli_error($dbc);
                }
		
		
		
		
		
		?>
		
		
		
		<form action='purchase.php' method='POST' id='payment-form'>
		<span class='payment-errors'></span>		
		<div hidden>
		  
			<input type='text' size='20' value='<?php echo "$description"; ?>' name='description'/>
		
			<input type='text' size='40' value='<?php echo "$cardName"; ?>' data-stripe='name'/>
		
			<input type='text' size='20' value='<?php echo "$cardNumber"; ?>' data-stripe='number'/>
		  
			<input type='text' size='4' value='<?php echo "$CVC"; ?>' data-stripe='cvc'/>
		
			<input type='text' size='2' value='<?php echo "$expiration1"; ?>' data-stripe='exp-month'/>
	
			<input type='text' size='4' value='<?php echo "$expiration2"; ?>' data-stripe='exp-year'/>
	
			<input type='text' size='20' value='<?php echo "$firstName"; ?>' data-stripe='firstname' display='none'/>
		  
			<input type='text' size='20' value='<?php echo "$lastName"; ?>' data-stripe='lastname'/>

			<input type='text' size='30' value='<?php echo "$address"; ?>' data-stripe='address'/>

			<input type='text' size='20' value='<?php echo "$city"; ?>' data-stripe='city'/>

			<input type='text' size='2' value='<?php echo "$state"; ?>' data-stripe='state' maxlength='2'/>

			<input type='text' size='5' value='<?php echo "$zipCode"; ?>' data-stripe='zip' maxlength='5'/>

			<input type='text' size='10' value='<?php echo "$chargeAmount"; ?>' data-stripe='amount' name='amount'/>
		 
		</div>
		
	  </form>

	</td>


<?php
// displays the pictures
include('templates/footer.html')

?>