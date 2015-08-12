<?php
	$colors = array("red",
		"green",
		"purple",
		"white",
		"blue",
		"orange",
		"lightblue",
		"lightgreen",
		"mint"
	);
?>
<style>
	.wrapper{
		width:200px;
		margin:50px;
		font-family:Arial;
		font-size:12pt;
	}
	.upperDiv{
		height:150px;
		width:100%;
		background-color:white;
		border:1px solid black;
	}
	.lowerDiv{
		width:100%;
		margin:10px 0 10px 0;
		background-color:grey;
		border:1px solid black;
	}
	.messageBox{
		height:30px;
		width:100%;
		background-color:lightgrey;
		border:1px solid black;
		text-align:center;
	}
	.submitButton{
		margin:3px;
		width:22%;
		border:1px solid black;	
		border-radius:10px;
		-moz-border-radius:10px;
		-webkit-border-radius:10px;
		-o-border-radius:10px;
		text-indent:-9999px;
	}
</style>
<div class="wrapper">
	<div class="upperDiv">
	</div>
	<div class="lowerDiv">
		<form method="POST">
			<?php
				for($i = 0; $i < count($colors); $i++){
					echo '<input type="submit" name="submit" class="submitButton" style="background-color:' . $colors[$i] . '" value="' . $colors[$i] . '"/>';
				}
			?>
		</form>
	</div>
	<div class="messageBox"><?php if(isset($_POST["submit"])){echo $_POST["submit"];}?></div>
</div>