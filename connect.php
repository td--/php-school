<?php
//connect.php
$db_name='fisi14';
$db_user='root';
$db_password='';
$db_server='127.0.0.1';
mysql_connect ($db_server,$db_user,$db_password)
or 
die ('Fehler 1337');
mysql_select_db ($db_name)
or
die ('Fehler 42');
?>