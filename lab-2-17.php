<body>
<title> Mustafin Daniil Pi-322</title>
<?php
  static $a = array();
  require('functions.php');
  usl();

  $m=rand(2,7);
  $n=rand(2,7);

  $a=massiv($a, $m, $n);

  out($a, $m, $n);
  $k=rand(-5,5);
  echo '<p>The number k is '. $k;
  echo '<p>The sum of the elements is ' . calc($a, $m, $n, $k);
  
?>

</body>