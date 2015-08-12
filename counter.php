<?php
if (!$_POST){
	$_POST['counter']=0;
	echo '<title>Counter</title>';
}
if (isset($_POST['reset'])){
	$_POST['counter']=0;
}
if (isset($_POST['minus'])){
	/*echo 'runterz&aumlhlen';*/
	$_POST['counter']=$_POST['counter']-1;
	echo '<title>Counter -> - <-</title>';
	echo '</style>';
}
if (isset($_POST['plus'])){
	/*echo 'hochz&aumlhlen';*/
	$_POST['counter']=$_POST['counter']+1;
	echo '<title>Counter -> + <-</title>';
}
if ($_POST['counter']<0){
	echo '<style type="text/css">';
	echo 'body {
    background-color: #FF0000;
}';
	echo '</style>';
	echo '<title>Counter NEGATIV</title>';
}
else {
	echo '<style type="text/css">';
	echo 'body {
    background-color: #00FF00;
}';
	echo '</style>';
	echo '<title>Counter POSITIV</title>';
}

echo '<form method="post">';
echo '<div style="width:300px;border:1px solid black">';
echo '<div style="width:100%; height:200px; font-size:100px; text-align:center; margin-left:auto; margin-right:auto">';
echo $_POST['counter'];
echo '</div>';
echo '<div style="width:100%">';
echo '<input type="submit" name="plus" value="+" style="width:50%; border:1px solid black">';
echo '<input type="submit" name="minus" value="-" style="width:50%; border:1px solid black">';
echo '<br>';
echo '<input type="submit" name="reset" value="RESET" style="width:100%; border:1px solid black">';
echo '</div>';
echo '</div>';
echo '<input type="hidden" name="counter" value="'.$_POST['counter'].'">';
echo '</form>';



##ALTER COUNTER##
/*
if(!$_POST){
	$_POST['counter']=0;
}
if (isset($_POST['plus'])){
	$_POST['counter']=$_POST['counter']+1;
}
if (isset($_POST['minus'])){
	$_POST['counter']=$_POST['counter']-1;
}
if (isset($_POST['plus10'])){
	$_POST['counter']=$_POST['counter']+10;
}
if (isset($_POST['clear'])){
	$_POST['counter']=0;
}
echo '<form action="counter.php" method="post">';
echo '<p><input type="text" name="counter" value="'.$_POST['counter'].'"><br>';
echo '<p><input type="submit" name="plus" value="+"/></p>';
echo '<p><input type="submit" name="minus" value="-"/></p>';
echo '<p><input type="submit" name="plus10" value="+10"/></p>';
echo '<p><input type="submit" name="clear" value="C"/></p>';
echo '<input type="text" name="counter" value="';
echo '</form>';
*/
?>