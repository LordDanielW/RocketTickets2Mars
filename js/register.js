// register.js
//
//

//window.onload = init;

alert('init');

	$(function() { // Turn the text input into an Autocomplete widget:
		document.getElementById('country').autocomplete({
		    source: 'Templates/countries.php',
			minLength: 2
		});
	});

