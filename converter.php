<?php
echo '<title>Binary Converter</title>';
echo'<center>
<style>
p.width{
	width: 550px;
}
</style>'; 
//adds title, centers page, and determines the width.
//BINARYTOTEXTBEGIN
$p = 0; //p is a counter variable
if($_POST['binary'] != ""){
	$binary = $_POST['binary'];
	if(strpos($binary," ") == true){ 
		$binaryArray = explode(" ",$binary);
		}else if(strpos($binary, " ")!= true){
		         for($i = 0; $i < strlen($binary);$i++){
			          $p  = $p +1;
				  //go through every eight char and make them one location of the array. 
				  if($i ==0){
				            $l = 0;
					    $binaryArray[$l] = substr($binary,$i,8);
				  }else if($i != 0 and $p %8 == 0){
				            $l = $l+1;
  					    //echo $i.'<br>';//for debugging
         				    $binaryArray[$l] = substr($binary,$i+1,8);
         			  }
 
			}
		}
		echo "<b>Binary input</b>: ";
		echo '<p class = "width">';
		for($i = 0; $i < count($binaryArray);$i++){
		     echo $binaryArray[$i]." ";
		}
		echo '</p>';
		$exponent = 1;
		echo 'Translated into decimal numbers: ';//about to give them the ascii values of the letters
		for($e = 0; $e < count($binaryArray);$e++){
		       $converted = 0; 
		       $binary = $binaryArray[$e];
		       for($i = 0; $i <strlen($binary);$i++){
		                 $b = $i+1;
          			 $place = substr($binary,strlen($binary)-$b,1);
          			 if($place == "1"){
          			 	$converted = $converted + pow(2,$i);
          			 }else{
					$converted = $converted;
          			 }
 
			}
			$convertedArray[$e] = $converted;
			echo $converted." ";
		}
		echo '<br>Translated as letters: ';
		for($i = 0; $i <count($convertedArray);$i++){
		       echo chr($convertedArray[$i]);
		}
		echo '</p>';
	}//binary to text/numbers conversion.
 
 
//TEXT TO BINARY BEGIN
if($_POST['text'] != ""){//makes sure you are converting from text to binary.
	$text = $_POST['text'];
	$text = stripslashes($text);
	$binaryConverted = "";
	//do stuff to convert text to numbers.
	echo '<b>Text input:</b> '.$text;
	echo '<p class = "width">';
	echo 'Letters converted to their numeric values: '; 
	for($i = 0; $i < 9; $i++){
	        $twoPower[$i] = pow(2,$i);
	}
	$l = 0;
	for($i = 0; $i < strlen($text);$i++){
	        $numText = ord(substr($text,$i,1));
        	echo $numText;
        	echo ' ';
        	$textNumArray[$i] = $numText;
        	// 
        	for($g = 0;$g < 9; $g++){
        	       $pow = 8-$g;
        	        if(($textNumArray[$i]/$twoPower[$pow]) >= 1){
                       		$binaryConverted .= "1";
                  		$textNumArray[$i] = $textNumArray[$i] - $twoPower[$pow];
           		}else if(($textNumArray[$i]/$twoPower[$pow]) < 1 and $g >= 1){
                  	      $binaryConverted.="0"; //adds a zero in place of where 
            		}
            		if($textNumArray==$binaryConverted){
				  break; //when $textNumArray is equal to $binaryConverted then the text is finished converting.
            		}
 
		}
          	$binaryConverted.=" ";
 
	} 
	echo '</p>';   
	echo 'Letters converted to binary: ';
	echo '<p class = "width">';
	echo $binaryConverted;
	echo '</p>';
	// convert odd nums into binary look at highest thing divides(maybe make an arbitrary loop that goes up to 512 and see if any even go into)
  	// then go on down the line to see if it works.
  
}
if($_POST['text']=="" and $_POST['binary'] == ""){
      echo'You need to put something in the text fields!'; //remind the user to put in text
}
echo 'Go back <a href="index.php">here</a>';
?>