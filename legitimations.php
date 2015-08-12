<?php
session_start();
echo '<link href="css/bootstrap.min.css" rel="stylesheet">';
if (isset($_POST['logout'])){
	session_destroy();
	unset($_SESSION['nickname']);
}
if(isset($_POST['anmelden'])){
	$str_select_user='SELECT username from user where nickname="'.$_POST['nickname'].'"AND password="'.$_POST['password'].'"';
	$query_select_user=mysql_query($str_select_user);
	if ($user=mysql_fetch_assoc($query_select_user)){
		//erfolgreich
		echo 'SUCCEED';
	}
	else{
		exit; //falscher login
	}
}
if (isset($_POST['login'])){
	echo '<form method="post">';
	echo 'Anmeldename: <input type="text" name="nickname" value="">';
	echo 'Passwort: <input type="password" name="password" value="">';
	echo '<input type="submit" name="anmelden" value="Anmelden">';
	echo '</form>';
}
?>