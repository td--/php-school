<h1>Raster</h1>
<link rel="stylesheet" style="text/css" href="table.css"/>
<form method="post" action="raster.php">

Höhe<input type="text" name="input1" /><br>
Breite<input type="text" name="input2" /><br>
Abstand(in px)<input type="text" name="input3" /><br>
Anzahl Ausgaben<input type="text" name="input4" /><br>
<input type="submit" value=" Absenden ">
<input type="hidden" id="save" value="0" />
</form>
<button name="buttonwelt" onclick="lightaround()">start light</button>
<script language="javascript" type="text/javascript">
function lightaround(){
	
	
	for(var i = 0; i <= ele.length; i++){
		document.getElementById('save').value = i;
		var ele = document.getElementsByTagName("td");
		if(ele[i].innerHTML == 'X'){
					setTimeout(function(){
						var ele = document.getElementByTagName("td");
						var i = document.getElementsById("save").value;
						ele[i].style.backgroundColor = 'green';
					}, 1000);
		}
	}
}
</script>
<?php
function genTable($height,$width,$margin){
echo '<table border="0" style="line-height:10px; margin-left:' . $margin . '; float:left;">';
echo '<tr>';
		
		for($i = 1; $i <= $width; $i++){
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
		}
		echo '</tr>';
		for($i = 1; $i <= $width; $i++){
			echo '<tr>';
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
			for($j = 1; $j <= $width-2; $j++){
				echo '<td></td>';
			}
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
			echo '</tr>';
		}
		
		
		echo '<tr>';
		
		for($i = 1; $i <= $width; $i++){
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
		}
		
		for($i = 0; $i < $width / 2; $i++){
			echo '<tr>';
				$j = 0;
				while ($j < $width){
					if($j == $i || $j == $width - $i-1){
						echo '<td>X</td>';
					}
					else{
						echo '<td> </td>';
					}
					
					$j++;
				} 
			echo '</tr>';
		}
echo '</tr>';
echo '</table>';
}
function genTableStair($height,$width,$margin){
echo '<table border="0" style="line-height:10px; margin-left:' . $margin . '; float:left;">';
echo '<tr>';
		
		for($i = 1; $i <= $width; $i++){
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
		}
		echo '</tr>';
		for($i = 1; $i <= $width; $i++){
			echo '<tr>';
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
			for($j = 1; $j <= $width-2; $j++){
				echo '<td></td>';
			}
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
			echo '</tr>';
		}
		
		
		echo '<tr>';
		
		for($i = 1; $i <= $width; $i++){
			if($i % 2 == 0){
				echo '<td class="red">X</td>';
			}
			else{
				echo '<td class="blue">X</td>';
			}
		}
		

echo '</tr>';
echo '</table>';
}
if(isset($_POST['input1'])){
	$height = $_POST['input1'];
	$height = $height - 2;
	$width = $_POST['input2'];
	$margin = $_POST['input3'];
	$anzahl = $_POST['input4'];
	if(strpos($margin,"px")!==false){
		for($i = 1; $i <= $anzahl; $i++){
			echo genTable($height,$width,$margin);
		}
	 
	}
	else{
		echo 'Sie müssen den Abstand in px angeben!!!';
	}
	
}
else{
	echo 'Geben Sie einen wert ein!';
}

?>