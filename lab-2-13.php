<title> Mustafin Daniil PI-322</title>
<?php
  $a=rand(3,20);
  print('The random number is ' . $a);
  $arr=array();
  print ('<p> An array of ' . $a . ' items filled with random numbers: ');
  for ($i = 0; $i < $a; $i++) {
    $arr[$i]=rand(10,99);
    print ($arr[$i] . ' ');
  }

  print ('<p> Sorted array: ');
  sort($arr);
  for ($i = 0; $i <= $a; $i++) {
    print ($arr[$i] . ' ');
  }

  $arr=array_reverse($arr);
  print ('<p> Array elements in reverse order: ');
  for ($i = 0; $i <= $a; $i++) {
    print ($arr[$i] . ' ');
  }

  array_pop($arr);
  print ('<p> Array after removing the last element: ');
  for ($i = 0; $i <= $a; $i++) {
    print ($arr[$i] . ' ');
  }

  print ('<p> Sum of array elements: ' . array_sum($arr));

  print ('<p> The number of elements in the array: ' . (count($arr) + 1));

  print ('<p> Arithmetic mean for array elements: ' . round((array_sum($arr)/(count($arr)+1)), 2));

  if (in_array(50, $arr)) {
    print ('<p> The number 50 is in the array');
  }
  else { print ('<p> Number 50 was not in the array'); }

  $arr=array_unique($arr);
  print ('<p> An array of unique elements: ');
  for ($i = 0; $i <= $a; $i++) {
    print ($arr[$i] . ' ');
  }
 
?>