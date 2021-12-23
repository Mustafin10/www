<?php
$dn=rand(1,7);
print ($dn ." - weekday number <br>");
switch ($dn) {
case 1: print ("it's monday"); break;
case 2: print ("it's tuesday"); break;
case 3: print ("it's wednesday"); break;
case 4: print ("it's thursday"); break;
case 5: print ("it's friday"); break;
case 6: print ("it's saturday"); break;
case 7: print ("it's sunday");
}
?>