<html>
<head>
<meta charset="utf-8">
<title> Мустафин Даннил ПИ-322</title>
</HEAD>
<BODY>
<?
header('Content-Type: text/html; charset=utf-8');
$text1 = $_POST["text1"];
$text2 = $_POST["text2"];
$text3 = $_POST["text3"];
$sym1 = $_POST["sym1"];
$sym2 = $_POST["sym2"];
$let = $_POST["letter"];

$s1c = 0;
$s2c = 0;
$letc = 0;
$rev = "";
$t1 = array();
$t2 = array();
$t3 = array();
$o1 = 0;
$o2 = 0;
$o3 = 0;
$o4 = "";
$o5="";
if (isset($_POST["text1"])) {

  echo '<h3> Вариант 13 </h3>';
  echo $text1;
  echo '<br>';
  $t1 = preg_split('//u', $text1, -1, PREG_SPLIT_NO_EMPTY);
  foreach ($t1 as $z) {
    if ($sym1 == $z) { $s1c++; }
    if ($sym2 == $z) { $s2c++; }
  }
  echo ('Символ "' . $sym1 . '" встречается ' . $s1c . ' раз <br>');
  echo ('Символ "' . $sym2 . '" встречается ' . $s2c . ' раз');

  echo '<h3> Вариант 21 </h3>';
  echo $text2;
  echo '<br>';
  $strArr = preg_split('//u', $text2, null, PREG_SPLIT_NO_EMPTY);
  $o2 = count($strArr)+1;
  for($i=0; $i<=$o2; $i++){
	  if($o3>2){
		  $o4 = $o4 . "е";
		  $o3=0;
	  }
	  $o4 = $o4 . $strArr[$i];
	  $o3++;
  }
  echo $o4;

  echo '<h3> Вариант 17 </h3>';
  echo $text3;
  echo '<br>';
  if(is_numeric($text3)){
	$o1 = (float) $text3;
	$o1 = $o1 - floor($o1);
	if($o1 != 0){
		echo ('2 <br>');
	}else{
		echo ('1 <br>');
	}
	}else{
	  echo ('0 <br>');
	}
}

?>
</BODY> 
</HTML>
