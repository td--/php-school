<?php
	echo '<span style="color:red;"> for </span><br>';
	for($i = 0; $i <= 5; $i++){
	
		echo $i . '<br>';
		
	}
	echo '<br><br><br>';
	echo '<span style="color:red;"> while </span><br>';
	$i= 0;
	while($i <= 5){
	
		echo $i . '<br>';
		$i++;
	
	}
	
	echo '<br><br><br>';
	echo '<span style="color:red;"> while addieren </span><br>';
	$i= 0;
	$neutral = 0;
	while($i <= 10){
	
	$i++;
	$neutral = $neutral + $i;


	if($i == 10){
		echo $neutral . '<br>';
	}
	
	}
	echo '<br><br><br>';
	echo '<span style="color:red;"> array foreach </span><br>';
	
	$arraytest = array(1,2,3,4,5);
	
	foreach($arraytest as $key){
	
		echo $key . '<br>';
	
	}
?>
