<?php
 if ($_POST["a"]>$_POST["b"])  
   echo ("Largest number:".$_POST["a"]); 
  elseif ($_POST["a"]<$_POST["b"])  
 echo ("Largest number:".$_POST["b"]);  
 elseif ($_POST["a"]=$_POST["b"])
 echo ("The numbers are equal");

 echo ("<BR> <A href='s3-1.html'> come back </A>"); 
?> 