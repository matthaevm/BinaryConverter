<?php
 
echo '<title>Binary Converter</title>';
 
echo '<b><center>Binary converter: </b><br>
This is a binary converter that converts<br>
text to binary,(and text to ASCII numbers <br>
as well) and binary to text, and their base<br>
ten equivalent.Enjoy.<br>';
echo'Binary numbers';
echo'<form method = "POST" action = "converter.php">
 
<textarea name="binary" cols="30" rows="8">
</textarea>
<br>Letters<br>
<textarea name="text" cols ="30" rows="8">
</textarea><br>
<input type = "submit" value = "submit">
</form>';
?>