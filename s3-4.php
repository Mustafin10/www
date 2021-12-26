<title> Mustafin Daniil PI-322</title>
<body>
<p>Registration check:
<form method="POST" action="<?php print $PHP_SELF ?>">
 <p>Login: <INPUT type="text" name="n">
 <P> <INPUT type="submit" name="obr" value="Check">
</form>

<?
$n=$_POST["n"];
$arr=array();
$arr[0]="Mustafin Daniil Eduardovic";
$arr[1]="Petrov Petr Petrovic";
$arr[2]="Ivanov Ivan Ivanic";
$arr[3]="Kirillov Kirill Kirillovic";
if (isset($_POST["obr"])) {

  for ($i = 0; $i < count($arr); $i++) {
    if ($n == $arr[$i]) { echo 'Hello, ' . $n; $acc=false; break;}
    else { $acc=true; }
  }
  if ($acc) { echo 'You are not a registered user!';}

}

?>