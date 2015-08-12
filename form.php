
<form action="form.php" method="post">
 <p>Artikel: <input type="text" name="artikel" /></p>
 <p>Menge: <input type="text" name="menge" /></p>
 <p>Preis: <input type="text" name="preis" /></p>
 <p><input type="submit" name="button" value="Bestellen"/></p>
 <p><input type="reset" name="button" value="Abbrechen"/></p>
</form>
<?php
if(isset($_POST["artikel"])){
echo 'Folgender Artikel wird bestellt:';
echo $_POST["artikel"];
echo '<br>Folgende Menge wird bestellt:';
echo $_POST["menge"];
echo '<br>Folgender Artikelpreis:';
echo $_POST["preis"];
echo '<br>Gesamtpreis:';
echo $_POST["preis"]*$_POST["menge"];
}
echo '<br><br><br>';

echo '<input type="text" name="artikel" value="';
if (isset($_POST['artikel'])){
	echo $_POST['artikel'];
}
echo '">';
?>