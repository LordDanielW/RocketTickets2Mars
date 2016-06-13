<!--
	register.php
	This page allows users to register for the website
-->
<?php
// displays the logo and navigation bar
include('templates/header.html');

$registerForm = 
	'<td>
	<form method="post">
		<h3>Name</h3>
		<div><label for="name">First Name</label><br><input type="text" name="firstName" id="firstName" required></div>
		<div><label for="name">Middle Initial</label><br><input type="char" name="midInit" id="midInit" ></div>
		<div><label for="name">Last Name</label><br><input type="text" name="lastName" id="lastName" required></div>
		
		<h3>Contact Information</h3>
		<div><label for="phone">Phone Number</label><br><input type="text" name="phone" id="phone" required></div>
		<div><label for="email1">Email Address</label><br><input type="text" name="email1" id="email1" required></div>
		<div><label for="email2">Confirm Email Address</label><br><input type="text" name="email2" id="email2" required></div>
		<div><input type="checkbox" name="subscribe" value="subscribe"> enroll in newsletter<br></div>
				
		<h3>Address</h3>
		<div><label for="country">Country</label><br></div>	
		<select name="country" id="country" onchange="" size="1">                
			<option value="US" selected="selected">UNITED STATES OF AMERICA</option>                  
			<option value="AF">AFGHANISTAN</option>                    
			<option value="AL">ALBANIA</option>                    
			<option value="DZ">ALGERIA</option>                    
			<option value="AS">AMERICAN SAMOA</option>                    
			<option value="AD">ANDORRA</option>                    
			<option value="AO">ANGOLA</option>                    
			<option value="AI">ANGUILLA</option>                    
			<option value="AQ">ANTARCTICA</option>                    
			<option value="AG">ANTIGUA AND BARBUDA</option>                    
			<option value="AR">ARGENTINA</option>                    
			<option value="AM">ARMENIA</option>                    
			<option value="AW">ARUBA</option>                    
			<option value="AU">AUSTRALIA</option>                    
			<option value="AT">AUSTRIA</option>                    
			<option value="AZ">AZERBAIJAN</option>                    
			<option value="BS">BAHAMAS</option>                    
			<option value="BH">BAHRAIN</option>                    
			<option value="BD">BANGLADESH</option>                    
			<option value="BB">BARBADOS</option>                    
			<option value="BY">BELARUS</option>                    
			<option value="BE">BELGIUM</option>                   
			<option value="BZ">BELIZE</option>                    
			<option value="BJ">BENIN</option>                    
			<option value="BM">BERMUDA</option>                    
			<option value="BT">BHUTAN</option>                    
			<option value="BO">BOLIVIA</option>                    
			<option value="BQ">BONAIRE, SINT EUSTATIUS AND SABA</option>                    
			<option value="BA">BOSNIA AND HERZEGOVINA</option>                    
			<option value="BW">BOTSWANA</option>                    
			<option value="BR">BRAZIL</option>                    
			<option value="BN">BRUNEI DARUSSALAM</option>                    
			<option value="BG">BULGARIA</option>                    
			<option value="BF">BURKINA FASO</option>                    
			<option value="BI">BURUNDI</option>                    
			<option value="KH">CAMBODIA</option>                    
			<option value="CM">CAMEROON</option>                    
			<option value="CA">CANADA</option>                    
			<option value="CV">CAPE VERDE</option>                    
			<option value="KY">CAYMAN ISLANDS</option>                    
			<option value="CF">CENTRAL AFRICAN REPUBLIC</option>                    
			<option value="TD">CHAD</option>                    
			<option value="CL">CHILE</option>                    
			<option value="CN">CHINA</option>                    
			<option value="CX">CHRISTMAS ISLAND</option>                    
			<option value="CC">COCOS (KEELING) ISLANDS</option>                    
			<option value="CO">COLOMBIA</option>                    
			<option value="KM">COMOROS</option>                    
			<option value="CD">THE DEMOCRATIC REPUBLIC OF THE CONGO</option>                    
			<option value="CG">CONGO</option>                    
			<option value="CK">COOK ISLANDS</option>                    
			<option value="CR">COSTA RICA</option>                    
			<option value="CI">COTE D IVOIRE (Ivory Coast)</option>                    
			<option value="HR">CROATIA (LOCAL NAME - HRVATSKA)</option>                    
			<option value="CU">CUBA</option>                    
			<option value="CW">CURACAO</option>                    
			<option value="CY">CYPRUS</option>                    
			<option value="CZ">CZECH REPUBLIC</option>                    
			<option value="DK">DENMARK</option>                    
			<option value="DJ">DJIBOUTI</option>                    
			<option value="DM">DOMINICA</option>                    
			<option value="DO">DOMINICAN REPUBLIC</option>                    
			<option value="EC">ECUADOR</option>                    
			<option value="EG">EGYPT</option>                    
			<option value="SV">EL SALVADOR</option>                    
			<option value="GQ">EQUATORIAL GUINEA</option>                   
			<option value="ER">ERITREA</option>                    
			<option value="EE">ESTONIA</option>                    
			<option value="ET">ETHIOPIA</option>                    
			<option value="FK">FALKLAND ISLANDS (MALVINAS)</option>                    
			<option value="FO">FAROE ISLANDS</option>                   
			<option value="FJ">FIJI</option>                    
			<option value="FI">FINLAND</option>                    
			<option value="FR">FRANCE</option>                    
			<option value="GF">FRENCH GUIANA</option>                   
			<option value="PF">FRENCH POLYNESIA</option>                    
			<option value="GA">GABON</option>                    
			<option value="GM">GAMBIA</option>                    
			<option value="GE">GEORGIA</option>                    
			<option value="DE">GERMANY</option>                   
			<option value="GH">GHANA</option>                    
			<option value="GI">GIBRALTAR</option>                    
			<option value="GR">GREECE</option>                    
			<option value="GL">GREENLAND</option>                    
			<option value="GD">GRENADA</option>                    
			<option value="GP">GUADELOUPE</option>                    
			<option value="GU">GUAM</option>                    
			<option value="GT">GUATEMALA</option>                    
			<option value="GN">GUINEA</option>                    
			<option value="GW">GUINEA - BISSAU</option>                    
			<option value="GY">GUYANA</option>                    
			<option value="HT">HAITI</option>                    
			<option value="HN">HONDURAS</option>                    
			<option value="HK">HONG KONG</option>                    
			<option value="HU">HUNGARY</option>                    
			<option value="IS">ICELAND</option>                    
			<option value="IN">INDIA</option>                    
			<option value="ID">INDONESIA</option>                    
			<option value="IR">IRAN (ISLAMIC REPUBLIC OF)</option>                    
			<option value="IQ">IRAQ</option>                    
			<option value="IE">IRELAND</option>                    
			<option value="IL">ISRAEL</option>                    
			<option value="IT">ITALY</option>                    
			<option value="JM">JAMAICA</option>                    
			<option value="JP">JAPAN</option>                    
			<option value="JO">JORDAN</option>                    
			<option value="KZ">KAZAKHSTAN</option>                    
			<option value="KE">KENYA</option>                    
			<option value="KI">KIRIBATI</option>                    
			<option value="KP">DEMOCRATIC PEOPLES REPUBLIC OF KOREA</option>                  
			<option value="KR">REPUBLIC OF KOREA</option>                    
			<option value="KW">KUWAIT</option>                    
			<option value="KG">KYRGYZSTAN</option>                    
			<option value="LA">LAO PEOPLES DEMOCRATIC REPUBLIC</option>                    
			<option value="LV">LATVIA</option>                    
			<option value="LB">LEBANON</option>                    
			<option value="LS">LESOTHO</option>                    
			<option value="LR">LIBERIA</option>                    
			<option value="LY">LIBYA</option>                    
			<option value="LI">LIECHTENSTEIN</option>                    
			<option value="LT">LITHUANIA</option>                    
			<option value="LU">LUXEMBOURG</option>                    
			<option value="MO">MACAO</option>                    
			<option value="MK">MACEDONIA - THE FORMER YUGOSLAV REPUBLIC OF</option>                    
			<option value="MG">MADAGASCAR</option>                    
			<option value="MW">MALAWI</option>                    
			<option value="MY">MALAYSIA</option>                    
			<option value="MV">MALDIVES</option>                    
			<option value="ML">MALI</option>                    
			<option value="MT">MALTA</option>                    
			<option value="MH">MARSHALL ISLANDS</option>                    
			<option value="MQ">MARTINIQUE</option>                    
			<option value="MR">MAURITANIA</option>                   
			<option value="MU">MAURITIUS</option>                    
			<option value="YT">MAYOTTE</option>                    
			<option value="MX">MEXICO</option>                    
			<option value="FM">MICRONESIA - FEDERATED STATES OF</option>                    
			<option value="MD">REPUBLIC OF MOLDOVA</option>                    
			<option value="MC">MONACO</option>                    
			<option value="MN">MONGOLIA</option>                    
			<option value="ME">MONTENEGRO</option>                    
			<option value="MS">MONTSERRAT</option>                    
			<option value="MA">MOROCCO</option>                    
			<option value="MZ">MOZAMBIQUE</option>                    
			<option value="MM">MYANMAR</option>                    
			<option value="NA">NAMIBIA</option>                    
			<option value="NR">NAURU</option>                    
			<option value="NP">NEPAL</option>                    
			<option value="NL">NETHERLANDS</option>                    
			<option value="NC">NEW CALEDONIA</option>                    
			<option value="NZ">NEW ZEALAND</option>                    
			<option value="NI">NICARAGUA</option>                    
			<option value="NE">NIGER</option>                    
			<option value="NG">NIGERIA</option>                    
			<option value="NF">NORFOLK ISLAND</option>                    
			<option value="MP">NORTHERN MARIANA ISLANDS</option>                    
			<option value="NO">NORWAY</option>                    
			<option value="OM">OMAN</option>                    
			<option value="PK">PAKISTAN</option>                    
			<option value="PW">PALAU</option>                    
			<option value="PS">PALESTINE, STATE OF</option>                    
			<option value="PA">PANAMA</option>                    
			<option value="PG">PAPUA NEW GUINEA</option>                    
			<option value="PY">PARAGUAY</option>                    
			<option value="PE">PERU</option>                    
			<option value="PH">PHILIPPINES</option>                    
			<option value="PL">POLAND</option>                    
			<option value="PT">PORTUGAL</option>                    
			<option value="PR">PUERTO RICO</option>                    
			<option value="QA">QATAR</option>                    
			<option value="RE">REUNION</option>                    
			<option value="RO">ROMANIA</option>                    
			<option value="RU">RUSSIAN FEDERATION</option>                    
			<option value="RW">RWANDA</option>                    
			<option value="SH">SAINT HELENA</option>                    
			<option value="KN">SAINT KITTS AND NEVIS</option>                    
			<option value="LC">SAINT LUCIA</option>                    
			<option value="PM">SAINT PIERRE AND MIQUELON</option>                    
			<option value="VC">SAINT VINCENT AND THE GRENADINES</option>                    
			<option value="WS">SAMOA</option>                    
			<option value="SM">SAN MARINO</option>                    
			<option value="ST">SAO TOME AND PRINCIPE</option>                    
			<option value="SA">SAUDI ARABIA</option>                    
			<option value="SN">SENEGAL</option>                    
			<option value="RS">SERBIA</option>                    
			<option value="SC">SEYCHELLES</option>                    
			<option value="SL">SIERRA LEONE</option>                    
			<option value="SG">SINGAPORE</option>                    
			<option value="SX">SINT MAARTEN (DUTCH PART)</option>                    
			<option value="SK">SLOVAKIA (SLOVAK REPUBLIC)</option>                    
			<option value="SI">SLOVENIA</option>                    
			<option value="SB">SOLOMON ISLANDS</option>                    
			<option value="SO">SOMALIA</option>                    
			<option value="ZA">SOUTH AFRICA</option>                    
			<option value="SS">SOUTH SUDAN</option>                    
			<option value="ES">SPAIN</option>                    
			<option value="LK">SRI LANKA</option>                    
			<option value="SD">SUDAN</option>                    
			<option value="SR">SURINAME</option>                    
			<option value="SZ">SWAZILAND</option>                    
			<option value="SE">SWEDEN</option>                    
			<option value="CH">SWITZERLAND</option>                    
			<option value="SY">SYRIAN ARAB REPUBLIC</option>                    
			<option value="TW">CHINESE TAIPEI</option>                    
			<option value="TJ">TAJIKISTAN</option>                    
			<option value="TZ">UNITED REPUBLIC OF TANZANIA</option>                   
			<option value="TH">THAILAND</option>                    
			<option value="TL">TIMOR-LESTE</option>                    
			<option value="TG">TOGO</option>                    
			<option value="TO">TONGA</option>                    
			<option value="TT">TRINIDAD AND TOBAGO</option>                    
			<option value="TN">TUNISIA</option>                    
			<option value="TR">TURKEY</option>                    
			<option value="TM">TURKMENISTAN</option>                    
			<option value="TC">TURKS AND CAICOS ISLANDS</option>                    
			<option value="TV">TUVALU</option>                    
			<option value="UG">UGANDA</option>                    
			<option value="UA">UKRAINE</option>                    
			<option value="AE">UNITED ARAB EMIRATES</option>                    
			<option value="GB">UNITED KINGDOM</option>                    
			<option value="UY">URUGUAY</option>                    
			<option value="UZ">UZBEKISTAN</option>                    
			<option value="VU">VANUATU</option>                    
			<option value="VE">VENEZUELA, BOLIVARIAN REPUBLIC OF</option>                    
			<option value="VN">VIET NAM</option>                    
			<option value="VG">BRITISH VIRGIN ISLANDS</option>                    
			<option value="VI">U.S. VIRGIN ISLANDS</option>                    
			<option value="WF">WALLIS AND FUTUNA ISLANDS</option>                    
			<option value="EH">WESTERN SAHARA</option>                    
			<option value="YE">REPUBLIC OF YEMEN</option>                    
			<option value="ZM">ZAMBIA</option>                   
			<option value="ZW">ZIMBABWE</option>                    
		</select>			
		
		<div><label for="zip">Street Address</label><br><input type="text" name="address1" id="address1" required></div>
			<input type="text" name="address2" id="address2" ></div>
		<div><label for="city">City</label><br><input type="text" name="city" id="city" required></div>
		<div><label for="state">State</label><br>
		<select name="state" id="state" onchange="" size="1">
			<option value="AL">AL</option>
			<option value="AK">AK</option>
			<option value="AZ">AZ</option>
			<option value="AR">AR</option>
			<option value="CA">CA</option>
			<option value="CO">CO</option>
			<option value="CT">CT</option>
			<option value="DE">DE</option>
			<option value="FL">FL</option>
			<option value="GA">GA</option>
			<option value="HI">HI</option>
			<option value="ID">ID</option>
			<option value="IL">IL</option>
			<option value="IN">IN</option>
			<option value="IA">IA</option>
			<option value="KS">KS</option>
			<option value="KY">KY</option>
			<option value="LA">LA</option>
			<option value="ME">ME</option>
			<option value="MD">MD</option>
			<option value="MA">MA</option>
			<option value="MI">MI</option>
			<option value="MN">MN</option>
			<option value="MS">MS</option>
			<option value="MO">MO</option>
			<option value="MT">MT</option>
			<option value="NE">NE</option>
			<option value="NV">NV</option>
			<option value="NH">NH</option>
			<option value="NJ">NJ</option>
			<option value="NM">NM</option>
			<option value="NY">NY</option>
			<option value="NC">NC</option>
			<option value="ND">ND</option>
			<option value="OH">OH</option>
			<option value="OK">OK</option>
			<option value="OR">OR</option>
			<option value="PA">PA</option>
			<option value="RI">RI</option>
			<option value="SC">SC</option>
			<option value="SD">SD</option>
			<option value="TN">TN</option>
			<option value="TX">TX</option>
			<option value="UT">UT</option>
			<option value="VT">VT</option>
			<option value="VA">VA</option>
			<option value="WA">WA</option>
			<option value="WV">WV</option>
			<option value="WI">WI</option>
			<option value="WY">WY</option>
		</select></div>
		
		<div><label for="zip">ZIP Code</label><br><input type="text" name="zip" id="zip" required></div>
		
		<br><br>
		<h3>Username and Password</h3>
		<label>Username</label><br>
		<input name="username" id="username" type="text" required>
		<br>
		<label>Password</label><br>
		<input name="pass1" id="pass1" type="password" required>
		<br>
		<label>Confirm Password</label><br>
		<input name="pass2" id="pass2" type="password" required>
		<br>
		
		
		
		<input class="button" formaction="register.php" type="submit" value="Register" required>
	</form>
	</td>
	
	<!--script src="js\register.js" type="text/javascript"></script-->
	';

//establishes database connection
include('Templates/connection.php');


        if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
    
            print $registerForm; 
            
        } else {
            
            $issue = FALSE;
            
            //check that form info has been entered
            //TODO: filter the user input
            if (empty($_POST['firstName'])) {
                print '<p class = "alert">You must enter a first name.</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['firstName'])) == 0){
                print '<p class = "alert">Please enter a first name.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['midInit'])) {
                print '<p class = "alert">You must enter a middle initial.</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['midInit'])) == 0){
                print '<p class = "alert">Please enter a middle initial.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['lastName'])) {
                print '<p class = "alert">You must enter a last name.</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['lastName'])) == 0){
                print '<p class = "alert">Please enter a last name.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['phone'])) {
                print '<p class = "alert">You must enter a phone number.</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['phone'])) == 0){
                print '<p class = "alert">Please enter a phone number.</p>';
                $issue = TRUE;
            }
            
            //Check for valid phone number
            $regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
            if(!preg_match($regex, $_POST['phone'])) {
                print '<p class = "alert">Please use a valid phone number</p>';
                $issue = TRUE;
            }
            
            
            if (empty($_POST['email1'])) {
                print '<p class = "alert">You must enter an email address.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['email2'])) {
                print '<p class = "alert">You must enter your email twice for confirmation.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['country'])) {
                print '<p class = "alert">You must enter a country.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['city'])) {
                print '<p class = "alert">You must enter a city.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['address1'])) {
                print '<p class = "alert">You must enter an address.</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['address1'])) == 0){
                print '<p class = "alert">Please enter an address.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['state'])) {
                print '<p class = "alert">You must enter a state or province.</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['state'])) == 0){
                print '<p class = "alert">Please enter a state.</p>';
                $issue = TRUE;
            }
			
            if (empty($_POST['zip'])) {
                print '<p class = "alert">You must enter a Zipcode.</p>';
                $issue = TRUE;
            }
            
            if (!preg_match('/^[0-9]{5}([- ]?[0-9]{4})?$/', $_POST['zip'])) {
                print '<p class = "alert">Invalid zip code entered</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['zip'])) == 0){
                print '<p class = "alert">Please enter a zip code.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['username'])) {
                print '<p class = "alert">You must enter a username.</p>';
                $issue = TRUE;
            }
            
            //Check for blank input
            if (strlen(trim($_POST['username'])) == 0){
                print '<p class = "alert">Please enter a username.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['pass1'])) {
                print '<p class = "alert">You must enter a password.</p>';
                $issue = TRUE;
            }
            
            if (empty($_POST['pass2'])) {
                print '<p class = "alert">You must confrim your password.</p>';
                $issue = TRUE;
            }
            
            
            //Check for valid email
            if(!(filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL))){
                print '<p class = "alert">Entered email is invalid</p>';
                $issue = TRUE;
            }
            
            //Check for email match
            if ($_POST['email1'] != $_POST['email2']) {
                print '<p class = "alert">Entered emails do not match</p>';
                $issue = TRUE;
            }

            
            //Check pass length
            if (strlen($_POST['pass1']) < 8) {
                print '<p class="alert">Password must be at least 8 characters.</p>';
                $issue = TRUE;
            }
            
            //Check password match
            if ($_POST['pass1'] != $_POST['pass2']) {
                print '<p class = "alert">Entered passwords do not match</p>';
                $issue = TRUE;
            }
            
            
            //Check username availability. Something like:
            
            $query = 'SELECT * FROM users ORDER BY userName DESC';
            if ($r = mysqli_query($dbc, $query)) {
            
                while ($row = mysqli_fetch_array($r)) {
                    if ($row['username'] == $_POST['username']) {
                        print '<p class="alert">That username is already taken.<p>';
                        $issue = TRUE;           
                    }
                }
            
            }
            
            
            
            //If no problems proceed with preparing data and storing in DB
            if ($issue === FALSE) {
                
                
                
                //filter data
                $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
                $midInit = filter_input(INPUT_POST, 'midInit', FILTER_SANITIZE_STRING);
                $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
                $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
                $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
                $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
		$address1 = filter_input(INPUT_POST, 'address1', FILTER_SANITIZE_STRING);
		$address2 = filter_input(INPUT_POST, 'address2', FILTER_SANITIZE_STRING);
		$country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
                $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
                $email = filter_input(INPUT_POST, 'email1', FILTER_SANITIZE_EMAIL);
                $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_NUMBER_INT);
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $tempPass = filter_input(INPUT_POST, 'pass1', FILTER_SANITIZE_STRING);
                
                
                
                
                //format for query
                $firstName = mysqli_real_escape_string($dbc, $firstName);
                $midInit = mysqli_real_escape_string($dbc, $midInit);
                $lastName = mysqli_real_escape_string($dbc, $lastName);
                $city = mysqli_real_escape_string($dbc, $city);
                $state = mysqli_real_escape_string($dbc, $state);
                $phone = mysqli_real_escape_string($dbc, $phone);
                $email = mysqli_real_escape_string($dbc, $email);
                $zip = mysqli_real_escape_string($dbc, $zip);
                $username = mysqli_real_escape_string($dbc, $username);
                $tempPass = mysqli_real_escape_string($dbc, $tempPass);
                
                //Hash password with Bcrypt
                $options = $options = ['cost' => 12];
                $password = password_hash($tempPass, PASSWORD_BCRYPT, $options);
                
                
                //Send to database. Something like:
                
                $query = "INSERT INTO users (username, password, firstName, midInit, lastName, city, state,
					phone, email, address1, address2, zip, country )				
                                VALUES ('$username', '$password', '$firstName', '$midInit', '$lastName', '$city', '$state',
					'$phone', '$email', '$address1', '$address2', '$zip', '$country' )
                                 ";
                        
                if (mysqli_query($dbc, $query)) {
                    print '<p>You are now registered in the database! </p>';
                    print '<p>Please visit the login page to sign in!</p>';
                } else {
                    print '<p style="color: red;">Error:' . mysqli_error($dbc);
                }
                
                
                
                
                //test to check hashing
                //print $password;
                
                
            } else {
                
                print '<p>There was an issue</p>';
                        
            }
            


            
        }
        

	
	// displays the pictures
	include('templates/footer.html');

?>

