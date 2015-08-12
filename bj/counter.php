<?php

if(!$_POST){
	$_POST['counter'] = 0;
}
if(isset($_POST["submit"])){
	switch ($_POST["submit"]) {
    case "plus":
			$counter = $_POST["counterfield"] + 1;
        break;
    case "minus":
			$counter = $_POST["counterfield"] - 1;
		break;
	case "clear":
			$counter = $_POST["counterfield"] = 0;
		break;
	}
}

//	<button name="countup" vlaue="+">+</button>
//	<button name="countdown" value="-">-</button>
?>

<form method="post">
	<input type="text" style="text-align:center;" name="counterfield" value="<?php if(isset($_POST["submit"])){ echo $counter;}else{echo "0";}?>" />
	<input type="submit" name="submit" value="plus">
	<input type="submit" name="submit" value="minus">
	<input type="submit" name="submit" value="clear">
</form>



