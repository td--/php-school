<?php
session_start();
//LOGIN/OUT
if(isset($_POST['logout'])){
	session_destroy();
	Unset($_SESSION['nickname']);
}
if(isset($_POST['login'])){
	echo 'Sie Wollen sich anmelden';
	//$_SESSION['nickname']='Thies';
	echo '<form method=post>';
	echo 'Nickname: <input type="text" name="nickname"><br>';
	echo 'Passwort: <input type="password" name="password"><br>';
	echo '<input type="submit" name="anmelden" value="anmelden">';
	echo '</form>';
}
if(isset($_POST['anmelden'])){
	$_SESSION['nickname']=$_POST['nickname'];
}
else{//Kennwort falsch

}
	//exit;


//
if(isset($_SESSION['nickname'])){
	echo '<div style="width:100% height:20px border:1px solidblack">';
		echo 'Hallo '.$_SESSION['nickname'];
		echo '<form method="post">
				<input type="submit" name="logout" value="abmelden">
			  </form>
		  </div>';
}
else{
	echo '<div style="width:100% height:20px border:1px solidblack">';
		echo 'Hallo Gast';
		echo '<form method="post">
				<input type="submit" name="login" value="anmelden">
			  </form>
		  </div>';
		exit;
}
?>