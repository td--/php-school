<?php 
if(isset($_POST["goal"])){
	$goal = $_POST["goal"]; 	
}else{
	$goal = rand(1, 100);
}
if(!isset($_POST["fails"])){
	$fails = 0;
}
if(isset($_POST["userinput"])){

	if(is_numeric($_POST["userinput"])){
		if($_POST["userinput"] < 100 && $_POST["userinput"] > 0){
			$userinput = $_POST["userinput"];
			if($userinput == $goal){
				$success = 'Richtig!</br>';
				$success .= 'Geheimzahl: ' . $goal . '</br>';
				$solved = 1;
			}else{
				$fails = $_POST['fails'] + 1;
				if($userinput == 69){
					echo '<img src="giphy.gif" />';
				}elseif($userinput > $goal){
					$success = 'Die gesuchte Zahl ist <span style="text-decoration:underline;font-weight:bold;">kleiner</span> als Ihre Eingabe.</br>';
					$success .='Ihre Eingabe war: ' . $userinput;
				}else{
					$success = 'Die gesuchte Zahl ist <span style="text-decoration:underline;font-weight:bold;">größer</span> als Ihre Eingabe.</br>';
					$success .= 'Ihre Eingabe war: ' . $userinput;
				}
			}
		}else{
			$errorMessage = 'Zahl ist nicht im Rahmen!';
			$fails = $_POST["fails"];
		}	
	}else{
		$errorMessage = 'Eingabe muss eine Zahl sein!';
		$fails = $_POST["fails"];
	}
}



?>
<style>
	.wrapper{
		width:200px;
		height:auto;
		background-color:white;
		border:1px solid black;
		position:absolute;
		margin:auto;
		left:0;
		right:0;
		padding:30px;
		top:20%;
	}
	.content{
		font-size:12pt;
		font-family:Arial;
		text-align:center;
	}
	.errorMessage{
		color:red;
		border:1px solid red;
		margin-bottom:20px;
	}
	.success{
		color:green;
		border:1px solid green;
		margin-bottom:20px;
	}
	input{
		margin:10px;
	}
	.submitButtom{
		background-color:lightblue;
		font-size:13pt;
		font-weight:bold;
	}
</style>

<div class="wrapper">
	<div class="content">
		<form method="POST" class="<?php if(isset($solved)){echo "solved";} ?>">
			<?php if(isset($errorMessage)){
				echo '<div class="errorMessage">' . $errorMessage . '</div>';
			}else{
				echo '<div class="success">' . $success . '</div>';
			}?>
			<span>Geben Sie eine Zahl zwischen 1 und 100 ein.</span></br></br>
			<input type="hidden" name="goal" value="<?php echo $goal ?>"/>
			<input type="hidden" name="fails" value="<?php echo $fails ?>"/>
			<input type="text" name="userinput" /></br>
			<input type="submit" class="submitButtom" value="try">
		</form>	
		<span><?php echo "Fails:" . $fails . "</br>"; ?></span>
	</div>
</div>

