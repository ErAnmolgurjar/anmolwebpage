<form method="post">  
Enter a Number: <input type="text" name="input"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
if($_POST)  
{  
    $input=$_POST['input'];  
    for ($i = 2; $i <= $input-1; $i++) {  
      if ($input % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo 'The Number '. $input . ' is not prime';  
}  else {  
   echo 'The Number '. $input . ' is prime';  
   }   
}  
?>  