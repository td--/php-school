<?php
session_start();
echo '<link href="css/bootstrap.min.css" rel="stylesheet">';
if (isset($_POST['logout'])){
	session_destroy();
	unset($_SESSION['nickname']);
}

if (isset($_POST['anmelden'])){
	
	$str_select_users='select * from users where username="'.$_POST['nickname'].'" and password="'.$_POST['password'].'";';
	$query_select_users=mysql_query($str_select_users);
	$use=mysql_fetch_assoc($query_select_users);
	if ($_POST['password']==$use['password']){
		$_SESSION['nickname']==$use['username'];
		
	$str_select_users='select * from users where username="'.$_POST['nickname'].'" and password="'.$_POST['password'].'";';
	$query_select_users=mysql_query($str_select_users);
	$use=mysql_fetch_assoc($query_select_users);
	}
	else{
		exit;
	}
}

if (isset($_POST['login'])){
	$str_select_users='select * from users where username="'.$_POST['nickname'].'" and password="'.$_POST['password'].'";';
	$query_select_users=mysql_query($str_select_users);
	$use=mysql_fetch_assoc($query_select_users);
	echo'Sie wollen sich anmelden';
	echo'<div class="form-group">'; 
	echo'<form method="post" class="form-inline"><input type="text" class="form-control" name="nickname" placeholder="Username">';
	echo'<form method="post" class="form-inline"><input type="password" class="form-control" name="password" placeholder="Password">';
}
if (isset($_SESSION['nickname'])){
	echo '<div style="width:100%; height:20px; border=1px solid black;"> Hallo '.$_SESSION['nickname'];
	echo '<form method="post"><input type="submit" class="btn btn-danger" name="logout" value="Abmelden"></form></div>';
}
else{
	echo '<div style="width:100%; height:20px; border=1px solid black;"> <form method="post"> <input type="submit" class="btn btn-success" name="login" value="Anmelden"></form></div>';
	exit;
}
echo'</div>';
?>
