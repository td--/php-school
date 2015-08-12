<table style="border:1px solid black">
<?php

for($i = 0; $i <= 10; $i++){
	echo '<tr>';
		$j = 0;
		while ($j <= $i){
			if($j == $i){
				echo '<td>X</td>';
			}
			else{
				echo '<td> </td>';
			}
			
			$j++;
		} 
	echo '</tr>';
}
?>
</table>