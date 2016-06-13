// Script 4.5  - footer.js
// This script slides pictures for a show.

window.onload = init;

var nextButt;
var prevButt;
var lastButt;
var beginButt;
var lengths;
var count = 1;
var max = 7;
var show = ["images/footerImg/image1.jpg", "images/footerImg/image2.jpg", "images/footerImg/image3.jpg", "images/footerImg/image4.jpg", "images/footerImg/image5.jpg", "images/footerImg/image6.jpg", "images/footerImg/image7.jpg"];

//  Function called when the window has been loaded.
//  Function adds event listeners to the form.
function init()
{
		//alert('init');
		
		nextButt = document.getElementById('next');
		nextButt.onclick = next;
		
		prevButt = document.getElementById('previous');
		prevButt.onclick = previous;
		
		lastButt = document.getElementById('last');
		lastButt.onclick = last;
		
		beginButt = document.getElementById('begin');
		beginButt.onclick = begin;
	
		var lengths = show.length;
	
	
} // End of init() function.


// makes next picture appear and adds one to count
function next()
	{
//		alert(count);
		if (count < max)
		{	
			count++;
			document.getElementById("picture").src = show[(count - 1)];
			document.getElementById("picNumb").value = count;
		}
		else if (count == max)
		{
			count = 1;
			document.getElementById("picture").src = show[0];
			document.getElementById("picNumb").value = count;
		}
		else
		{
			alert('poop');	
		}
	}

// makes prev pic appear and decrements count
function previous()
	{
//		alert(count);
		if (count != 1)
		{	
			count--;
			document.getElementById("picture").src = show[(count - 1)];
			document.getElementById("picNumb").value = count;
		}
		else if (count == 1)
		{
			count = max;
			document.getElementById("picture").src = show[(max - 1)];
			document.getElementById("picNumb").value = count;
		}
		else
		{
			alert('poop');	
		}
	}

// goes to last pic
function last()
	{
//		alert(count);
		
			count = max;
			document.getElementById("picture").src = show[(max - 1)];
			document.getElementById("picNumb").value = count;
		
	}

// goes to first pic
function begin()
	{
//		alert(count);
		
			count = 1;
			document.getElementById("picture").src = show[0];
			document.getElementById("picNumb").value = count;
		
	}
