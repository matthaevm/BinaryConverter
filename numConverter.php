<?php
$num = $_POST['num'];
//numConverter.php
$binaryConverted = "";
$oneAdded = false;
  for($i = 0; $i < 17; $i++){
         $twoPower[$i] = pow(2,$i);
  }
echo '<center>';
echo 'Base 10 input: ';
echo $num;
echo '<br>';
echo 'Binary output: ';
for($g = 0;$g < 17; $g++){
               $pow = 16-$g;
              if(($num/$twoPower[$pow]) >= 1){
                  $binaryConverted .= "1";//add a 1 to the binary string
		  $oneAdded = true;
		  $num = $num - $twoPower[$pow];
            }else if(($num/$twoPower[$pow]) < 1 and $g >= 1){
		if($oneAdded ==true){
                  $binaryConverted.="0";//add a zero to the binary string
		}
            }
           
 
}
echo $binaryConverted;
echo '<br>Go back <a href="index.php">here</a>';
?>