<!--
	confirmation.php
	This page submits the users payment information to the database for processing
-->
<?php

include('templates/header.html');

$loginForm = '<td>
                <form method="post" id="login">
		<label>Username</label>
		<input name="username" id="username" type="text" required>
		</br></br>
		<label>Password</label>
		<input name="password" id="password" type="password" required>
		<br><br>
		<input class="button" formaction="login.php" type="submit" value="Login" required>
                </form>
            </td>';

//Establishes DB connection
include('Templates/connection.php');

//if no data has yet been posted to the server, the login form will display.
//else means the form has already been submitted and the data will be processed. 

if (empty($_SESSION['loggedin'])) {
    

	if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
		
		//Check to make sure cookies are enabled.
		echo '<script type="text/javascript">'
			, 'if (!navigator.cookieEnabled) {document.write("Please enable cookies for this site to function properly");}'
			, '</script>';
		
		print $loginForm;
		
	} else {
		
                  //check for empty username and password fields
                if ((empty($_POST['username'])) && (empty($_POST['password']))) {  
                    
                    print '<p>Invalid username.<br />Please try again.</p>';
                    print $loginForm;
                 
                  //check for space as username  
                } else if (strlen(trim($_POST['username'])) == 0){ 
                    
                    print '<p class = "alert">Please enter your username.</p>';
                    print $loginForm;
                  
                  //check for space as password  
                } else if (strlen(trim($_POST['password'])) == 0){
                    
                    print '<p class = "alert">Please enter your password.</p>';
                    print $loginForm;
                    
                  //Check for minimum password length
                } else if (strlen($_POST['password']) < 8){
                    print '<p class = "alert">Passwords are a minimum of 8 characters.</p>';
                    print $loginForm;
                    
                } else {
			//Process the input username and password against database
                        
			//Gets the array of users from the DB
			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
			$query = "SELECT user_id, username, password FROM users 
				WHERE username = '" . $username . "'";
			$users = mysqli_query($dbc, $query);
						
			if(!empty($users)){
			
				//Searches the users to find a potential match
				while ($row = mysqli_fetch_array($users)) { 
					//echo "<h3>" . $row['username'] . "</h3>";
					
					//If username and password are valid
					if (($row['username'] == $_POST['username']) && (password_verify ($_POST['password'], $row['password']))) {
					
						//Establishes the session for the user, user is logged in
						$_SESSION['user_id'] = $row['user_id'];
                                                $_SESSION['loggedin'] = time();
						$_SESSION['expire'] = $_SESSION['loggedin'] + (120 * 60);  
						print '<p>You were logged in at ' . date("g:i a.") . '.</p>';
						
						ob_end_clean();
						  
								header ('Location: loggedinconf.php');
								break;   
									
					} else {
						
						print '<p>The user name and password do not match our records.<br />Please try again.</p>';
						//print $row['username'] . " and " . $row['password'];
						print $loginForm;
						
					}
				} 
			}else{
				print '<p>Invalid username.<br />Please try again.</p>';
						print $loginForm;
			}	  
			
			
		} 
		 
	}	
} else {
		
	print '<p>You are already logged in.</p>';
	
}

          
include('templates/footer.html');

?>
