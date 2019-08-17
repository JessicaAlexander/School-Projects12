<?php 
// --------------
// -- Programmer:  [Jessica Alexander]
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  [Chapter 10]
// -- Description: [Use of header/footer and web pages]
setcookie('font_size', '', time() -  6000, '/');
setcookie('font_color', '', time() - 6000, '/');
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Reset Your Settings</title>
</head>
<body>

<p>Your settings have been reset! Feel free to <a href="view_settings.php">customize</a> them again.</p>

</body>
</html>