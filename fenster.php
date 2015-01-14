<?php
//5x5
echo '<pre>';
$b=5;
$h=5;
$abstand='     ';
for($zeile=1;$zeile<=$h;$zeile=$zeile+1){
	echo $abstand;
		if($zeile==1 or $zeile==$h){
			for($spalte=1;$spalte<=$b;$spalte=$spalte+1){
		
				echo 'x';
			}
		}	
		else{
			echo 'x';
			for($spalte=1;$spalte<=$b-2;$spalte=$spalte+1){
				echo ' ';
			}
			echo 'x';
		}
echo $abstand;
		if($zeile==1 or $zeile==$h){
			for($spalte=1;$spalte<=$b;$spalte=$spalte+1){
		
				echo 'x';
			}
		}	
		else{
			echo 'x';
			for($spalte=1;$spalte<=$b-2;$spalte=$spalte+1){
				echo ' ';
			}
			echo 'x';
		}
echo $abstand;
		if($zeile==1 or $zeile==$h){
			for($spalte=1;$spalte<=$b;$spalte=$spalte+1){
		
				echo 'x';
			}
		}	
		else{
			echo 'x';
			for($spalte=1;$spalte<=$b-2;$spalte=$spalte+1){
				echo ' ';
			}
			echo 'x';
		}
echo $abstand;
		if($zeile==1 or $zeile==$h){
			for($spalte=1;$spalte<=$b;$spalte=$spalte+1){
		
				echo 'x';
			}
		}	
		else{
			echo 'x';
			for($spalte=1;$spalte<=$b-2;$spalte=$spalte+1){
				echo ' ';
			}
			echo 'x';
		}
echo $abstand;
		if($zeile==1 or $zeile==$h){
			for($spalte=1;$spalte<=$b;$spalte=$spalte+1){
		
				echo 'x';
			}
		}	
		else{
			echo 'x';
			for($spalte=1;$spalte<=$b-2;$spalte=$spalte+1){
				echo ' ';
			}
			echo 'x';
		}
						
echo '<br>';
}
echo '</pre>';	
?>