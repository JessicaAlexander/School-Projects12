<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add A Quotation</title>
</head>
<body>
<?php 
// --------------
// -- Programmer:  [Jessica Alexander]
// -- Course:      ITSE-1306 (Intro to PHP)
// -- Instructor:  Cesar "Coach" Marrero
// -- Assignment:  [Chap 11]
// -- Description: [files and dictionaries]
// ---------------
$file = '../quotes.txt';
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
	if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.') ) { // Need some thing to write.
	
		if (is_writable($file)) { 
			
			file_put_contents($file, $_POST['quote'] . PHP_EOL, FILE_APPEND | LOCK_EX); // Write the data.
			print '<p>Your quotation has been stored.</p>';
		
		} else { 
			print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
		}
		
	} else { 
		print '<p style="color: red;">Please enter a quotation!</p>';
	}
	
} 
?>

<form action="add_quote.php" method="post">
	<textarea name="quote" rows="5" cols="30">Enter your quotation here.</textarea><br>
	<input type="submit" name="submit" value="Add This Quote!">
</form>

</body>
</html>