<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View A Quotation</title>
</head>
<body>
<h1>Random Quotation</h1>
<?php 
// --------------
// -- Programmer:  [Jessica Alexander]
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  [Chap 11]
// -- Description: [files and dictionaries]
// ---------------
$data = file('../quotes.txt');
$n = count($data);
$rand = rand(0, ($n - 1));
print '<p>' . trim($data[$rand]) . '</p>';
?>
</body>
</html>