<?php
$a=rand(-5,0);
$b=rand(0,5);
print ("<p> Numbers from the segment [".$a.",".$b."]: <br>");
do {
echo($a . "<br>");
$a=++$a; }
while ($a<=$b);
?>