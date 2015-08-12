<?php
#print_r($_POST);
echo '<h1>Verschiedene Eingabetypen</h1>';
echo '<form method="post">';
echo '1. Text ';
echo '<input type="text" name="text" value="Test"><br>';
echo '2.Radio Button ';
echo '
    <input type="radio" id="female" name="geschlecht" value="Weiblich" checked><label for="female">  Weiblich</label>
	<input type="radio" id="male" name="geschlecht" value="M&aumlnnlich"><label for="male"> M&aumlnnlich</label><br>';
echo '<input type="submit" name="abschicken" value="Abschicken" class="buttonSubmit">';
echo '</form>';
if (isset($_POST)){
	echo '<hr>';
	echo '<a>Sie haben 1. input type="text": </a>'.$_POST['text'].'<a> eingegeben</a><br>';
	echo '<a>2. Bei Radio Button: </a>'.$_POST['geschlecht'].'<a> eingegeben.</a>';
}
?>