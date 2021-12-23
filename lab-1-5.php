<title> Mustafin Daniil PI-322 </title>
<p> variant 13
</p>
<?php
$a=rand(-20,20);
$b=rand(-20,20);
$c=rand(-20,20);
$d=rand(-20,20);
print('variant 3:(2*' . $c . '+51*' . $d. ')'. '/' .'(' .$d. '-'. $a. '-'. '1'.')') .'='.((2*$c+51*$d)/($d-$a-1));
print('<br>');
print('variant 13:('. $c.'* ('.$b.'+23)/(('.$a.'/2)-4*'.$d.'-1)') .'='.($c*($b+23)/(($a/2)-4*$d-1));
?>
