<?php
if(!$_POST){
	$calc = 0;
}
if(isset($_POST["submit"])){
	switch ($_POST["submit"]) {
    case "+":
			$calc = $_POST["calc"] + 1;
        break;
    case "-":
			$calc = $_POST["calc"] - 1;
		break;
	case "clear":
			$calc = 0;
		break;
	}
}
?>

<link rel="stylesheet" href="calc.css" type="text/css">
<style>
.counter{
	width:100%;
	height:125px;
	text-align:center;
	font-size:74pt;
	font-family:arial;
	padding-top:25px;
}
.counterWrong{
	background-color:red;
}
.counterOK{
	background-color:white;
}
.mainPanel{
	width:300px;
	border:1px solid black;
	margin:50px;
}
input.buttons{
	height:50px;
	width:33.33%;
	border:1px solid black;
	float:left;
	font-size:20pt;
	background-color:lightblue;
}

.buttons:focus{
	background-color:blue;
}
</style>

<div class="mainPanel <?php if($calc < 0){echo'counterWrong';}else{echo'counterOK';}?>">
	<div class="counter">
	<?php
	if($calc == 69){
		echo'<img src="giphy.gif" style="height:100%;widt:60%;">';
	}else{
		echo $calc;
	}
		
	?>
	</div>
	<div style="width:100%">
		<form method="POST">
			<input type="hidden" name="calc" value="<?php if(isset($_POST["submit"])){ echo $calc;}else{echo "0";}?>" />
			<input type="submit" name="submit" value="+" class="buttons" />
			<input type="submit" name="submit" value="-" class="buttons" />
			<input type="submit" name="submit" value="clear" class="buttons" />
		</form>
	</div>
</div>