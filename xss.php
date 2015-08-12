<?php
$offset = $argv[0];
$query  = "SELECT * FROM * OFFSET $offset;";
// mit PostgreSQL
$result = pg_query($conn, $query);
// mit MySQL
$result = mysql_query($query);
?>