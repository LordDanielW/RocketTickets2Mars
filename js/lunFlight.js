// lunFlight.js
//
//

// Wrap it all in an immediately-invoked function:
(function() {
    'use strict';
	
	function init() 
	{
	//	alert('init');
		var radioPath = document.getElementsByName('direction');
	//	var z = radioPath.length;
		for(var i = 0; i < radioPath.length; i++)
		{
			U.addEvent(radioPath[i], 'change', roundTrip);
		};
		document.getElementById("roundTrip").style.visibility = "hidden";
	} // End of init() function.

	// Assign an event listener to the window's load event:
	U.addEvent(window, 'load', init);
	

	function roundTrip()
	{
		//alert('roundTrip');
		
		var radioP = document.getElementsByName('direction');
		var direction;

		for(var i = 0; i < radioP.length; i++)
		{
			if(radioP[i].checked)
			{
				direction = radioP[i].value
			}
		};
		
		if(direction == "bothLun")
		{
			document.getElementById("roundTrip").style.visibility = "visible";
		} else
		{
			document.getElementById("roundTrip").style.visibility = "hidden";
			document.getElementById("monthpicker2").value = "";
		}
	}
})(); // End of immediately-invoked function.

