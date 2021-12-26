<title> Mustafin Daniil PI-322</title>
<body>
<p>Enter N
<form method="POST" action="<?php print $PHP_SELF ?>">
 <p>N=<INPUT type="number" name="n">
 <P> <INPUT type="submit" name="obr" value="Return the result">
</form>

<?
$n=$_POST["n"];

if (isset($_POST["obr"])) {

  echo '<p><table border=1>';
  echo '<tr><td style="vertical-align:top">Even:';
 
  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) { echo ('<br>' . $i); }
  }

  echo '<td style="vertical-align:top">Odd:';

  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 != 0) { echo ('<br>' . $i); }
  }

  echo '<td style="vertical-align:top">Simple:';

  for ($i = 1; $i <= $n; $i++) {
    if (check($i)==True)
      echo ('<br>' . $i);
  }

  echo '<td style="vertical-align:top">Composite:';

  for ($i = 1; $i <= $n; $i++) {
    if (check($i)!=True)
      echo ('<br>' . $i);
  }

}

function check($num) {
$check = True;
$s = floor(sqrt($num));
for ($i = 2; $i <= $s; $i++)
 {
  if ($num % $i == 0) 
  {
   $check = False;
   break;
  }               
 }
return $check;
}
?>