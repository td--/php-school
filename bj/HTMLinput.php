<style>
	.wrapper{
		background-color:white;
		width:400px;
		margin:25px;
		border:1px solid black;
		font-family:arial;
		padding:5px;
		height:auto;
		float:left;
	}
	.wrapper label{
		float:left;
		margin-bottom:5px;
	}
	.wrapper input{
		float:right;
		margin-bottom:5px;
	}
	.row{
		height:32px;
		
	}
	.outputWrapper{
		float:left;
		background-color:lightgreen;
		font-family: arial;
		width:400px;
		padding:30px;
		border:1px solid black;
		margin-top:25px;
	}
	.radioLabel{
		float:right;
	}
</style>
<?php
function defaultValue($post, $field){
	if(isset($post[$field])){
		$defaultValue = $post[$field];
	}else{
		$defaultValue = "";
	}
	return $defaultValue;
}
?>

<div class="wrapper">
	<form method="POST">
	<div class="row">
		<label>button</label><input type="button" name="button" value="Button"/></br>
	</div>
	<div class="row">
		<label>checkbox</label><input  <?php if(isset($_POST["checkbox"]) && $_POST["checkbox"] == "on"){echo "checked";}?> type="checkbox" name="checkbox"/></br>
	</div>
	<div class="row">
		<label>colorpicker</label><input type="color" name="color" value="<?php echo defaultValue($_POST, "color"); ?>"/></br>
	</div>
	<div class="row">
		<label>date</label><input type="date" name="date" value="<?php echo defaultValue($_POST, "date"); ?>" /></br>
	</div>
	<div class="row">
		<label>datentime</label><input type="datetime" name="datetime" value="<?php echo defaultValue($_POST, "datetime"); ?>"/></br>
	</div>
	<div class="row">
		<label>timelocal</label><input type="datetime-local" name="datetime-local" value="<?php echo defaultValue($_POST, "datetime-local"); ?>" /></br>
	</div>
	<div class="row">
		<label>email</label><input type="email" name="email" value="<?php echo defaultValue($_POST, "email"); ?>" /></br>
	</div>
	<div class="row">
		<label>file</label><input type="file" name="file" value="<?php echo defaultValue($_POST, "file"); ?>" /></br>
	</div>
	<div class="row">
		<label>hidden</label><input type="hidden" name="hidden" value="<?php echo defaultValue($_POST, "hidden"); ?>" /></br>
	</div>
	<div class="row" style="height:130px;">
		<label>image</label><input style="width:100px" type="image" name="image" src="dickbutt.png" value="image submit button"/></br>
	</div>
	<div class="row">
		<label>month</label><input type="month" name="month" value="<?php echo defaultValue($_POST, "month"); ?>" /></br>
	</div>
	<div class="row">
		<label>number</label><input type="number" name="number" value="<?php echo defaultValue($_POST, "number"); ?>" /></br>
	</div>
	<div class="row">
		<label>password</label><input type="password" name="password" value="<?php echo defaultValue($_POST, "password"); ?>" /></br>
	</div>
	<div class="row">
		<label>radio</label>
			<span class="radioLabel">Mann</span><input <?php if(isset($_POST["radio"]) && $_POST["radio"] == "mann"){echo "checked";}?> type="radio" name="radio" value="mann"></input>
			<span class="radioLabel">Frau</span><input <?php if(isset($_POST["radio"]) && $_POST["radio"] == "frau"){echo "checked";}?> type="radio" name="radio" value="frau"></input>
		</input></br>
	</div>
	<div class="row">
		<label>range</label><input type="range" name="range" value="<?php echo defaultValue($_POST, "range"); ?>" /></br>
	</div>
	<div class="row">
		<label>reset</label><input type="reset" name="reset"/></br>
	</div>
	<div class="row">
		<label>search</label><input type="search" name="search" value="<?php echo defaultValue($_POST, "reset"); ?>" /></br>
	</div>
	<div class="row">
		<label>tel</label><input type="tel" name="tel" value="<?php echo defaultValue($_POST, "tel"); ?>" /></br>
	</div>
	<div class="row">
		<label>text</label><input type="text" name="text" value="<?php echo defaultValue($_POST, "text"); ?>" /></br>
	</div>
	<div class="row">
		<label>time</label><input type="time" name="time" value="<?php echo defaultValue($_POST, "time"); ?>" /></br>
	</div>
	<div class="row">
		<label>url</label><input type="url" name="url" value="<?php echo defaultValue($_POST, "url"); ?>" /></br>
	</div>
	<div class="row">
		<label>week</label><input type="week" name="week" value="<?php echo defaultValue($_POST, "week"); ?>" /></br>
	</div>
	<div class="row">
		<label>submit</label><input type="submit" name="submit" /></br>
	</div>
	</form>
</div>
<?php
	if(isset($_POST["submit"]) || isset($_POST["image_x"])){
		echo '<div class="outputWrapper">';
		foreach($_POST as $key => $value){
			echo "Feld " . $key . ": " . $value . "</br>";
		}
		echo '</div>';
	}
	
?>