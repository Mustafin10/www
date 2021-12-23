<?php
$a=rand(1,10);
$b=rand(10,20);
print ("<p> Numbers from the segment [".$a.",".$b."]: <br>");
for ($i=$a; $i<=$b; ++$i) {
echo($a . "<br>");
$a=++$a; }
?>