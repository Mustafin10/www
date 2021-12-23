<?php
$a=rand(1,10); $b=rand(10,20);
print ("<p> Numbers from the segment [".$a.",".$b."]: <br>");
while ($a<=$b) { echo $a . "<br>";
$a=++$a; }
?>