
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Your Settings</title>
	<style type="text/css">
	body {
<?php 
// --------------
// -- Programmer:  [Jessica Alexander]
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  [Chapter 10]
// -- Description: [Use of header/footer and web pages]
if (isset($_COOKIE['font_size'])) {
	print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
} else {
	print "\t\tfont-size: medium;";
}
// Check for a font_color value:
if (isset($_COOKIE['font_color'])) {
	print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
} else {
	print "\t\tcolor: #000;";
}
?>
	}
	</style>
</head>
<body>
<p><a href="customize.php">Customize Your Settings</a></p>
<p><a href="reset.php">Reset Your Settings</a></p>

<p>yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda</p>

</body>
</html>