<title>Farben</title>
<center>
<style>
 .buttonSubmit{
	 border-radius:20px;
	 -moz-border-radius:20px;
	 -o-border-radius:20px;
	 -webkit-border-radius:20px;
 }
</style>
<?php
echo '<h1>Farben</h1>';
if (isset($_POST['rot'])){
	echo '<div style="background-color:#FF0000;width:500px;border:2px solid black">';
	$farbe='Rot';
}
elseif (isset($_POST['gruen'])){
	echo '<div style="background-color:#00FF00;width:500px;border:2px solid black">';
	$farbe='Gr&uumln';
}
elseif (isset($_POST['weiss'])){
	echo '<div style="background-color:#FFFFFF;width:500px;border:2px solid black">';
	$farbe='Weiss';
}

elseif (isset($_POST['schwarz'])){
	echo '<div style="background-color:#000000;width:500px;border:2px solid black">';
	$farbe='Schwarz';
}
elseif (isset($_POST['pink'])){
	echo '<div style="background-color:#FF00FF;width:500px;border:2px solid black">';
	$farbe='Pink';
}
elseif (isset($_POST['blau'])){
	echo '<div style="background-color:#0000FF;width:500px;border:2px solid black">';
	$farbe='Blau';
}

else '<div style="background-color:#BDBDBD;width:500px;border:2px solid black">';

echo '<div style="width:100%; height:450px; font-size:15px; text-align:center; margin-left:auto; margin-right:auto">';
echo '<div style="font-size:20px;">';
echo '</div>';
echo '</div>';
echo '<div style="background-color:#FFFFFF;width:500px;border:1px solid black">';
echo '<div style="background-color:#FFFFFF;width:100%;height:56px; font-size:10px; text-align:center; margin-left:auto; margin-right:auto">';
echo '<form method="post">';
echo '<input type="submit" name="rot" value="" class="buttonSubmit" style="width:50%; background-color:#FF0000; border:1px solid black">';
echo '<input type="submit" name="gruen" value="" class="buttonSubmit" style="width:50%; background-color:#00FF00; border:1px solid black">';
echo '<br>';
echo '<input type="submit" name="weiss" value="" class="buttonSubmit" style="width:50%; background-color:#FFFFFF; border:1px solid black">';
echo '<input type="submit" name="schwarz" value="" class="buttonSubmit" style="width:50%; background-color:#000000; border:1px solid black">';
echo '<br>';
echo '<input type="submit" name="pink" value="" class="buttonSubmit" style="width:50%; background-color:#FF00FF; border:1px solid black">';
echo '<input type="submit" name="blau" value="" class="buttonSubmit" style="width:50%; background-color:#0000FF; border:1px solid black">';
echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
echo 'Sie haben '.$farbe.' gew&aumlhlt.';
?>
</center>