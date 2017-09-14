<!-- ip-tools.php -->
<html>
<head>
<title> IP-Adresse </title>
</head>
<body>
<b>IP-Adresstools</b>
<?PHP

// Warnings unterdruecken
error_reporting (E_ALL ^ E_NOTICE);

// begin
echo "<form method='post'>"
	 ."<input type='text' name='ip-adresse'><br>"
	 ."<input type='submit' value='Press me'>"
	 ."</form>";
// end	 
	 
if (isset ($_POST["ip-adresse"])) {
// start code
   $bytes = explode (".", $_POST["ip-adresse"]);
   echo '<br>1. Byte = ".$bytes[0]';
   echo '<br>2. Byte = ".$bytes[1]';
   echo '<br>3. Byte = ".$bytes[2]';
   echo '<br>4. Byte = ".$bytes[3]';
}
?>

</body>
</html>