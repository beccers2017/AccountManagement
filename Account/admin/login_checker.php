<?php
//login checker for 'admin' access level

//if the seesion value is empty, he is not yet logged in, redirect them to login page
if(empty($_SESSION['logged_in'])) {
	header("Location: {$home_url}login.php?action=not_yet_logged_in");
}

//if access level was not 'admin', redirect to login page
else if($_SESSION['access_level']!="Admin") {
	header("Location: {$home_url}login.php?action=not_admin");
}
else {
	//no problem, stay on current page
}
?>