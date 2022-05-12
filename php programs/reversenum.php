<?php  
$num = 23456;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse number of 23456 is: $revnum";  
?>  




<?php  
function reverse($number)  
{  
  
    $num = (string) $number;  
     
    $revstr = strrev($num);  
    
    $reverse = (int) $revstr;   
     return $reverse;  
}  
 echo reverse(23456);  
?> 