<!--
	select.php
	This page is called when a users selects a flight and date
	and displays seats available for the flight
-->
<?php 
// displays the logo and navigation bar
include('templates/header.html');
//establishes database connection
include('Templates/connection.php');


// function createTicket
//	creates ticket format
//
function createTicket($type, $price, $date, $returnDate)
{
	if(isset($returnDate)) // Round Trip
	{
		$ticket = "<br/><br/><b>" . $type . "</b><br/>Price: $" . $price . "million" .
			"<br/>Launch Date: " . $date .
			"<br/>Return Launch Date: " . $returnDate . "<br/>" .
			"<input type='submit' id='" . $type . "' name='" . $type . "' value='Select' />";
	} 
	else //One Way
	{
		$ticket = "<br/><br/><b>" . $type . "</b><br/>Price: $" . $price . "million" .
			"<br/>Launch Date: " . $date .
			"<input type='submit' id='" . $type . "' name='" . $type . "' value='Select' />";
	}
	return $ticket;
}


// function findFlight
// queries flight table and returns result
// 
function findFlight($flightPath, $launchTime, $dbc)
{
	$query = "SELECT * FROM flight WHERE launchDate = '" .$launchTime.
						"' AND flightPath = '". $flightPath. "'";
	//echo $query;
	if ($result = mysqli_query($dbc, $query)) {

		/* fetch associative array */
		$flightInfo = mysqli_fetch_assoc($result); 
	//	Troubleshooting
	//	echo "<br/>flightID = " . $flightInfo["flightId"] . "  flightPath = " . $flightInfo["flightPath"]. "  seatPrice = " . $flightInfo["priceAseats"];
		/* free result set */
		mysqli_free_result($result);
		return $flightInfo;
	} else 
	{
		echo "Error, not a valid query";
		return null;
	}
}

$direction = $_POST['direction'];
$flightAvailable = false;
// executes if flight is OneWay
if($direction == "toRed" || $direction == "fromRed" || $direction == "toLun" 
	|| $direction == "fromLun" || $direction == "toBIG" || $direction == "fromBIG" )
{
	//echo $_POST['direction'];
	$launchDate = $_POST['monthpicker1'] . '-01'; //formats date for mysql database

	$toFlight = findFlight($direction, $launchDate, $dbc);
	if(isset($toFlight)) //
	{
		
		// stores flight info to session variable
		if(isset($_SESSION['user_id']))
		{
			$_SESSION['toFlight'] = $toFlight;
		}
		
		// checks if ticket are available, and calls createTicket to make tickets
		if( ($toFlight['totAseats'] - $toFlight['soldAseats']) > 0   )
		{	
			$aTicket = createTicket("VIP", $toFlight["priceAseats"], $launchDate, null);
			$flightAvailable = true;
		}
		if(($toFlight['totBseats'] - $toFlight['soldBseats']) > 0   )
		{
			$bTicket = createTicket("First Class", $toFlight["priceBseats"], $launchDate, null);
			$flightAvailable = true;
		}
		if(($toFlight['totCseats'] - $toFlight['soldCseats']) > 0   )
		{
			$cTicket = createTicket("Coach", $toFlight["priceCseats"], $launchDate, null);
			$flightAvailable = true;
		}
		if($flightAvailable == false)
		{
			$aTicket = 'Sorry no flights are available for this date. 
				<br/> Please select another date.';
			$bTicket = '';
			$cTicket = '';
		}
	} else
	{
		$aTicket = 'Invalid Date selected. 
			<br/> Please select the date in a yyyy-mm format between 2018 and 2021';
		$bTicket = '';
		$cTicket = '';
	}
	
// executes if flight is RoundTrip
} else if($direction == 'bothRed' || $direction == 'bothLun' || $direction == 'bothBIG')
{
	//echo here;
	// initiate variables
	if ($direction == 'bothRed')
	{
		$toDirection = 'toRed';
		$fromDirection = 'fromRed';
	}
	else if($direction == 'bothBIG')
	{
		$toDirection = 'toBIG';
		$fromDirection = 'fromBIG';
	}
	else if($direction == 'bothLun')
	{
		$toDirection = 'toLun';
		$fromDirection = 'fromLun';
	}

	$launchDate = $_POST['monthpicker1'] . '-01';
	$returnDate = $_POST['monthpicker2'] . '-01';

	// query flight table and return row of flight
	$toFlight = findFlight($toDirection, $launchDate, $dbc);
	$returnFlight = findFlight($fromDirection, $returnDate, $dbc);
	
	// stores flight info to session variable
	if(isset($_SESSION['user_id']))
	{
		$_SESSION['toFlight'] = $toFlight;
		$_SESSION['returnFlight'] = $returnFlight;
	}
	
	if(isset($toFlight)) //
	{
		// checks if ticket are available, and calls createTicket to make tickets
		if( ($toFlight['totAseats'] - $toFlight['soldAseats']) > 0   && ($returnFlight['totAseats'] - $returnFlight['soldAseats'])> 0)
		{	
			$aTicket = createTicket("VIP", ($toFlight["priceAseats"] * 1.4 ), $launchDate, $returnDate);
			$flightAvailable = true;
		}
		if(($toFlight['totBseats'] - $toFlight['soldBseats']) > 0  && ($returnFlight['totBseats'] - $returnFlight['soldBseats'])> 0 )
		{
			$bTicket = createTicket("First Class", $toFlight["priceBseats"] * 1.6, $launchDate, $returnDate);
			$flightAvailable = true;
		}
		if(($toFlight['totCseats'] - $toFlight['soldCseats']) > 0  && ($returnFlight['totCseats'] - $returnFlight['soldCseats'])> 0 )
		{
			$cTicket = createTicket("Coach", $toFlight["priceCseats"] * 1.8, $launchDate, $returnDate);
			$flightAvailable = true;
		}
		if($flightAvailable == false)
		{
			$aTicket = 'Sorry no flights are available for this date. 
				<br/> Please select another date.';
			$bTicket = '';
			$cTicket = '';
		}
	} else
	{
		$aTicket = 'Invalid Date selected. 
			<br/> Please select the date in a yyyy-mm format between 2018 and 2021';
		$bTicket = '';
		$cTicket = '';
	}
}

?>

    <td>
		<form action="purchase.php" method="post"> 
			<div id="optionA">
				<?php
					echo $aTicket
				?>
			</div>
			<div id="optionB">
				<?php
					echo $bTicket
				?>
			</div>
			<div id="optionC">
				<?php
					echo $cTicket
				?>
			</div>
		<form/>
	</td>
	<script src="js/select.js"></script>


<?php

// displays the pictures
include('templates/footer.html')

?>