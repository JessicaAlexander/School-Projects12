<?php 
// --------------
// -- Programmer:  [Jessica Alexander]
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  [Chapter 10]
// -- Description: [Use of header/footer and web pages]

session_start();
define('TITLE', 'Welcome to the Anti-PHP Fan Club!');
include('templates/header.html'); 

print '<h2>Welcome to the Anti-PHP Fan Club!</h2>';
print '<p>Hello, ' . $_SESSION['email'] . '!</p>';
	
date_default_timezone_set('America/Chicago');
print '<p>You have been logged in since: ' . date('G:i A l F j Y', $_SESSION['loggedin']) . '.</p>';
print '<p><a href="logout.php">Logout</a></p>';
	
include('templates/footer.html'); 
?>
