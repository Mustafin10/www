<HTML>
<HEAD> <TITLE> Guess the number </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Please enter a number from 1 to 10
 <INPUT type="text" name="a" size="3">
 <INPUT type="hidden" name="h" value="5"> // guess number
 <P> <INPUT type="submit" name="obr" value="Check">
</FORM>
<?
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["h"]) { echo($_POST["a"]." - GUESSED!");
 } else {
 if ($_POST["a"]>$_POST["h"]) {
 echo($_POST["a"]." - LOT...");
 } else { echo($_POST["a"]." - FEW..."); }
 } }
?>
</BODY> </HTML>