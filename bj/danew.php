<?php
if(isset($_POST["button"])){
	echo "Sie wollen ".$_POST["Menge"]." mal Artikel ".$_POST["Artikel"]
	." zum Einzelpreis von ".$_POST["Preis"]." bestellen? Gesamtsumme: ".($_POST["Preis"]*$_POST["Menge"])."<br>";
}
print_r($_POST);
?>
<form method="post">
Artikel <input type="text" name="Artikel" value="<?php if(isset($_POST["Artikel"])){ echo $_POST["Artikel"]; } ?>" ><br>
Menge <input type="text" name="Menge"><br>
Preis <input type="text" name="Preis"><br>
<input type="submit" name="button" value="Bestellen">
</form>