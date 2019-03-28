<?php
	echo '<title>Binary Converter</title>';
	echo '<b><center><br>Choose what type of binary converter <br>you would like to use.<br>';
	echo'<form method = "POST" action = "which.php">
	<select name = "which">
		<option value="text">Text to binary converter</option>
		<option value="num">Convert base 10 numbers to binary.</option>
	</select>
	<input type = "submit" value = "submit">';
	//simple form to determine if the user wants to use a text to binary converter or a base10 to binary converter.
?>
