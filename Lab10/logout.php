<?php 
// --------------
// -- Programmer:  [Jessica Alexander]
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  [Chapter 10]
// -- Description: [Use of header/footer and web pages]
session_start();

$_SESSION = [];

session_destroy();

define('TITLE', 'Logout');
include('templates/header.html');
?>

<h2>Welcome to the Anti-PHP Fan Club!</h2>
<p>You are now logged out.</p>
<p>Thank you for using this site. We hope that you liked it.<br>
Blah, blah, blah...
Blah, blah, blah...</p>

<?php include('templates/footer.html'); ?>