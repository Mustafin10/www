<?
$s3=($_POST["f"]." ".$_POST["n"]);
$s4=". We are glad to welcome you to our website.";
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это обращение «господин»…
 $s1="Dear ";
 $s2="Mr. ";
 break;
 case 2:
 // 2 — это обращение «госпожа»…
 $s1="Dear ";
 $s2="Ms. ";
 break;
 case 3:
 // 3 — это обращение «товарищ»…
 $s1="Dear ";
 $s2="comrade ";
 break;
}
echo ($s1 . $s2 . $s3 . $s4);
?>