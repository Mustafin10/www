<title> Mustafin Daniil PI-322 </title>
<p> variation 5 (13-8) </p>
<?php
  $n=rand(0,500);
  $k=0;
  print ('n=' . $n . '<br>');
  for ($a=-22; $a<=$n; $a++) { 
    for ($b=$a+1; $b<=$n; $b++) {
      if (($a*$a+$b*$b)==$n) {
	$k=1;
        print ('Yes, Numbers:' . $a . ' и ' . $b . '<br>'); break;
      }
    }
  }
  if ($k==0) {print ('No');}
?>