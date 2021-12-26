<?
if ($_POST["d"]=="plus") {
 $c=$_POST["a"]+$_POST["b"];
 echo ("sum of numbers = $c");
} else {
 $c=$_POST["a"]*$_POST["b"];
 echo ("product of numbers = $c");
 }
echo ("<BR> <A href='f3.html'> come back </A>");
?>