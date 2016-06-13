<?php 

session_start();

$_SESSION = array();

session_destroy();

include('templates/header.html');

print '<td><p>LOGGED OUT</p></td>';

include('templates/footer.html');


?>
