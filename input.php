<title>Input Types</title>
<h1>Input Types</h1>
<form method="post">
<input type="text" name="text">
<br>
<input type="password" name="password">
<br>
<input type="number" name="number">
<br>
<input type="checkbox" name="checkbox" value="Checkbox">
<br>
<input type="radio" name="radio" value="Radio Button">
<br>
<input type="button" name="button" value="Button">
<br>
<input type="email" name="email" value="e@ma.il">
<br>
<input type="file" name="file" value="file">
<br>
<input type="reset" name="reset" value="reset">
<br>
<input type="" name="" value="">
<br>
<input type="submit" name="submit" value="Abschicken">

</form>
<?php
echo $_POST['text'];
echo '<br>';
#echo $_POST['password'];
echo '<br>';
echo $_POST['number'];
echo '<br>';
echo $_POST['checkbox'];
echo '<br>';
echo $_POST['radio'];
echo '<br>';
echo $_POST['button'];
echo '<br>';
echo $_POST['file'];
?>