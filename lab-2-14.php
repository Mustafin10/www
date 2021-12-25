<title> Mustafin Daniil PI-322</title>
<?php 
echo "Array:";
$cust=array(
'cnum'=>2001, 
'cname' => 'Hoffman',
'city' => 'London',
'snum' =>1001
);
print_r($cust);
echo "<br>";
echo "An array with the key rating:";
$cust['rating']=100;
print_r($cust);
echo "<br>";
echo "Sorted array by value:";
asort($cust);
print_r($cust);
echo "<br>";
echo "Sorted array by keys:";
ksort($cust);
print_r($cust);
echo "<br>";
echo"Sorting the array:";
sort($cust);
print_r($cust);
echo "<br>";
?>