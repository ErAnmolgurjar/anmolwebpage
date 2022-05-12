<?php  
$string = "Anmol";  
echo "Reverse string of $string is " .strrev ( $string );  
?>  




<?php  
$string = "Anmol";  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  
?>  