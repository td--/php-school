<title>Zahlen Raten</title>
<?php
####OPTIONEN####
$mindestwert=1;
$maximalwert=100;
################




//CODE//
if (!$_POST['random']){
	$_POST['random']=rand($mindestwert, $maximalwert);
}
if (!$_POST['raten']){
	$_POST['raten']='';
}


if (isset($_POST['reset'])){
	$_POST['random']=rand($mindestwert, $maximalwert);
	$_POST['raten']='';
	$_POST['counter']=-1;
#	$_POST['geraten']='Noch nicht geraten';
}
$_POST['counter']=$_POST['counter']+1;
echo '<style type="text/css">';
echo 'body {
    background-color: #1C1C1C;
}
</style>';
echo '<center>';
echo '<div style="background-color:#BDBDBD;width:500px;border:2px solid black">';
echo '<div style="width:100%; height:450px; font-size:15px; text-align:center; margin-left:auto; margin-right:auto">';
echo '<center><h1>Zahlen Raten</h1>';
echo '<div style="font-size:20px;">';
echo 'Gebe eine Zahl zwischen '.$mindestwert.' und '.$maximalwert.' ein.';
echo '</div>';
echo '<br><br>';	
echo '<form method="post">';
echo '<div style="background-color:#FFFFFF;width:300px;border:5px solid black">';
echo '<div style="width:100%; height:200px; font-size:15px; text-align:center; margin-left:auto; margin-right:auto">';
echo 'Versuche: '.$_POST['counter'];
/*
echo '<br>';
echo 'Zuletzt geraten: '.$_POST['geraten'].'';
*/
echo '<br><br>';
echo '<input type="number" name="raten" value="'.$_POST['raten'].'">';
echo '<br><br>';
echo '<input type="hidden" name="random" value="'.$_POST['random'].'">';
echo '<input type="hidden" name="counter" value="'.$_POST['counter'].'">';
#echo '<input type="hidden" name="geraten" value="'.$_POST['raten'].'">';
echo '<input type="submit" name="send" value="TESTEN" style="width:50%; border:1px solid black">';
echo '<br><br>';
echo '<input type="submit" name="reset" value="RESET" style="width:70%; border:1px solid black">';

echo '</form>';
echo '<br>';
echo '</div></div></center>';
/*
echo $_POST['random'];
*/
if ($_POST['raten']<$_POST['random']){
	echo '<center><h2>Zu Niedrig</h2></center>';
}
if ($_POST['random']<$_POST['raten']){
	echo '<center><h2>Zu Hoch</h2></center>';
}
if ($_POST['random']==$_POST['raten']){
	echo '<center><h1>RICHTIG!</h1>';
	echo 'Du hast '.$_POST['counter'].' Versuche ben&oumltigt um die Zahl '.$_POST['random'].' zu erraten.</center>';
}
$_POST['raten']='';
?>