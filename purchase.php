<!--
	purchase.php
	This page is called by the flight pages so that the userInfocan select the 
	type of seat they would like ot fly in.
-->
<?php 
// displays the logo and navigation bar
include('templates/header.html');
//establishes database connection
include('Templates/connection.php');


	// Sets values
	$roundTrip = false;
	if (isset($_SESSION['returnFlight']))
	{
		$roundTrip = true;
	}
	$toFlight = $_SESSION['toFlight'];
    if (isset($_POST['VIP'])) 
	{
		$seat_type = "VIP";
		if($roundTrip)
		{
			$chargeAmount = $toFlight['priceAseats'] * 1.4;
		} else
		{
			$chargeAmount = $toFlight['priceAseats'];
		}
         
    } else if (isset($_POST['First Class'])) 
	{
		$seat_type = "firstClass";
        if($roundTrip)
		{
			$chargeAmount = $toFlight['priceBseats'] * 1.6;
		} else
		{
			$chargeAmount = $toFlight['priceBseats'];
		}
		
    } else if (isset($_POST['Coach'])) 
	{
		$seat_type = "coach";
		if($roundTrip)
		{
			$chargeAmount = $toFlight['priceCseats'] * 1.8;
		} else
		{
			$chargeAmount = $toFlight['priceCseats'];
		}
	}
	$_SESSION['chargeAmount'] = $chargeAmount;
	$_SESSION['seatType'] = $seat_type;
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

?>

    <td>
		
		  <h1>Credit Card Payment for SpaceX</h1>

	  <form action='confirmation.php' method='POST' id='payment-form' >
		<span class='payment-errors'></span>
		
		Total Cost is $ <?php echo " $chargeAmount"; ?> MIL USD
		
		</br>
		
		Please enter your payment information
		
		<div class='form-row'>
		  <label>
			<span>Description</span>
			<input type='text' size='20' name='description'required/>
		  </label>
		</div>
		
		<div class='form-row'>
		  <label>
			<span>Name on card</span>
			<input type='text' size='40' name='cardName' data-stripe='name'required/>
		  </label>
		</div>
		
		<div class='form-row'>
		  <label>
			<span>Card Number</span>
			<br/>
			<input type='text' size='20' name='cardNumber' data-stripe='number'required/>
		  </label>
		</div>

		<div class='form-row'>
		  <label>
			<span>CVC</span>
			<input type='text' size='4' name='CVC' data-stripe='cvc'required/>
		  </label>
		</div>

		<div class='form-row'>
		  <label>
			<span>Expiration (MM/YYYY)</span>
			<input type='text' size='2' name='expiration1' data-stripe='exp-month'required/>
		  </label>
		  <span> / </span>
		  <input type='text' size='4' name='expiration2' data-stripe='exp-year'required/>
		</div>
		
		<div hidden>
			<input type='text' size='20' value='<?php echo "$firstName"; ?>' data-stripe='firstname'>
		  
			<input type='text' size='20' value='<?php echo "$lastName"; ?>' data-stripe='lastname'/>

			<input type='text' size='30' value='<?php echo "$address"; ?>' data-stripe='address'/>

			<input type='text' size='20' value='<?php echo "$city"; ?>' data-stripe='city'/>

			<input type='text' size='2' value='<?php echo "$state"; ?>' data-stripe='state' maxlength='2'/>

			<input type='text' size='5' value='<?php echo "$zipCode"; ?>' data-stripe='zip' maxlength='5'/>

			<input type='text' size='10' value='<?php echo "$chargeAmount"; ?>' data-stripe='amount' name='amount'/>
		</div>	
		<button type='submit' name='purchase' >Submit Payment</button>
	  </form>
	</td>


<?php

// displays the pictures
include('templates/footer.html')

?>