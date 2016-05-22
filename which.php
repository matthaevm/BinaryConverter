<?php
$whichConvert = $_POST["which"];

	if($whichConvert == "text"){
		include('textBinary.php');
	}
	else if($whichConvert == "num"){
		include('num.php');
	}else{
		echo 'You need to choose one, silly. Go back <a href="index.php">here</a>';
		//be comedic and let the user know that they have somehow come accross a choice that isn't possible.
		//this is an error if you reach it.
	}

?>