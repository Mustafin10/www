<title> Mustafin Daniil PI-322</title>
<body>
<h3> Profile: Your character </h3>

<form method="POST" action="<?php print $PHP_SELF ?>">
<p>Your name: <input type="text" name="name" required>

<?
$name = $_POST["name"];
$rez = 0;
echo '<p>';
if (isset($_POST["obr"])) {
  if ($_POST["v1"]=="n") { $rez++;}
  if ($_POST["v2"]=="n") { $rez++;}
  if ($_POST["v3"]=="y") { $rez++;}
  if ($_POST["v4"]=="n") { $rez++;}
  if ($_POST["v5"]=="n") { $rez++;}
  if ($_POST["v6"]=="n") { $rez++;}
  if ($_POST["v7"]=="n") { $rez++;}
  if ($_POST["v8"]=="n") { $rez++;}
  if ($_POST["v9"]=="y") { $rez++;}
  if ($_POST["v10"]=="y") { $rez++;}
  if ($_POST["v11"]=="n") { $rez++;}
  if ($_POST["v12"]=="n") { $rez++;}
  if ($_POST["v13"]=="y") { $rez++;}
  if ($_POST["v14"]=="y") { $rez++;}
  if ($_POST["v15"]=="n") { $rez++;}
  if ($_POST["v16"]=="n") { $rez++;}
  if ($_POST["v17"]=="n") { $rez++;}
  if ($_POST["v18"]=="n") { $rez++;}
  if ($_POST["v19"]=="y") { $rez++;}
  if ($_POST["v20"]=="n") { $rez++;}

  if ($rez < 8) { echo $name . ', You can sympathize with your friends'; }
  elseif ($rez > 15) { echo $name . ', you have an agreeable character'; }
  else { echo $name . ', You are not without flaws, but you can get along with'; }
}

?>


<p> 1. Do you think that many of your acquaintances have a good character? <br>
    <input type="radio" name="v1" value="y" checked /> Yes
    <input type="radio" name="v1" value="n" /> No <br>
<p> 2. Are you annoyed by small daily chores? <br>
    <input type="radio" name="v2" value="y" checked /> Yes
    <input type="radio" name="v2" value="n" /> No <br>
<p> 3. Do you believe that your friends are devoted to you? <br>
    <input type="radio" name="v3" value="y" checked /> Yes
    <input type="radio" name="v3" value="n" /> No <br>
<p> 4. Is it unpleasant for you when a stranger makes a remark to you? <br>
    <input type="radio" name="v4" value="y" checked /> Yes
    <input type="radio" name="v4" value="n" /> No <br>
<p> 5. Are you capable of hitting a dog or cat? <br>
    <input type="radio" name="v5" value="y" checked /> Yes
    <input type="radio" name="v5" value="n" /> No <br>
<p> 6. Do you often take medications?  <br>
    <input type="radio" name="v6" value="y" checked /> Yes
    <input type="radio" name="v6" value="n" /> No <br>
<p> 7. Do you often change the store you go to for groceries?  <br>
    <input type="radio" name="v7" value="y" checked /> Yes
    <input type="radio" name="v7" value="n" /> No <br>
<p> 8. Do you continue to defend your point of view, realizing that you were wrong? <br>
    <input type="radio" name="v8" value="y" checked /> Yes
    <input type="radio" name="v8" value="n" /> No <br>
<p> 9. Are you burdened with social responsibilities? <br>
    <input type="radio" name="v9" value="y" checked /> Yes
    <input type="radio" name="v9" value="n" /> No <br>
<p> 10. Are you able to wait more than 5 minutes without worrying?  <br>
    <input type="radio" name="v10" value="y" checked /> Yes
    <input type="radio" name="v10" value="n" /> No <br>
<p> 11. Do you often think of your bad luck?  <br>
    <input type="radio" name="v11" value="y" checked /> Yes
    <input type="radio" name="v11" value="n" /> No <br>
<p> 12. Have you preserved your figure in comparison with the past?  <br>
    <input type="radio" name="v12" value="y" checked /> Yes
    <input type="radio" name="v12" value="n" /> No <br>
<p> 13. Can you accept teasing friends with a smile?  <br>
    <input type="radio" name="v13" value="y" checked /> Yes
    <input type="radio" name="v13" value="n" /> No <br>
<p> 14. Do you like family life?  <br>
    <input type="radio" name="v14" value="y" checked /> Yes
    <input type="radio" name="v14" value="n" /> No <br>
<p> 15. Are you vindictive?   <br>
    <input type="radio" name="v15" value="y" checked /> Yes
    <input type="radio" name="v15" value="n" /> No <br>
<p> 16. Do you find that the weather is typical for the given season?  <br>
    <input type="radio" name="v16" value="y" checked /> Yes
    <input type="radio" name="v16" value="n" /> No <br>
<p> 17. Do you happen to be in a bad mood in the morning? <br>
    <input type="radio" name="v17" value="y" checked /> Yes
    <input type="radio" name="v17" value="n" /> No <br>
<p> 18. Is modern painting annoying you? <br>
    <input type="radio" name="v18" value="y" checked /> Yes
    <input type="radio" name="v18" value="n" /> No <br>
<p> 19. Do you get bored with the presence of other people's children in the house for more than one hour? <br>
    <input type="radio" name="v19" value="y" checked /> Yes
    <input type="radio" name="v19" value="n" /> No <br>
<p> 20. Are you tired of doing PHP labs?  <br>
    <input type="radio" name="v20" value="y" checked /> Yes
    <input type="radio" name="v20" value="n" /> No <br>
<P> <INPUT type="submit" name="obr" value="Find out the result">
</form>