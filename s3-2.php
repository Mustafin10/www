<title> Mustafin Daniil PI-322</title>

<body>
<h3> Calculator </h3>
<p>Enter numbers to the nearest hundredth 
<form method="POST" action="<?php print $PHP_SELF ?>">
 <p>a=<INPUT type="number" step="0.01" name="a">
    b=<INPUT type="number" step="0.01" name="b">
 <br>
 <p>action:<SELECT NAME="z" SIZE="1">
  <OPTION VALUE="1" SELECTED> add
  <OPTION VALUE="2"> subtract
  <OPTION VALUE="3"> multiply
  <OPTION VALUE="4"> divide
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Calculate">
</form>

<?
$a=$_POST["a"];
$b=$_POST["b"];
if (isset($_POST["obr"])) {

  switch($_POST["z"]) {
   case 1:
    echo ($a . '+' . $b . '=');
    echo $a+$b;
    break;
   case 2:
    echo ($a . '-' . $b . '=');
    echo $a-$b;
    break;
   case 3:
    echo ($a . '*' . $b . '=');
    echo $a*$b;
    break;
   case 4:
    echo ($a . '/' . $b . '=');
    echo $a/$b;
    break;
  }
}
?>