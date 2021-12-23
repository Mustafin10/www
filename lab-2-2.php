<p> The largest number:
<p>
<?php
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("largest =" . $x);
elseif ($x<$y) echo ("largest =" . $y);
else print ("largest is not");
?>