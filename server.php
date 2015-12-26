<?php
require_once "functions.php";
connect();
$query='select * from test';
$result=mysql_query($query);
$row=mysql_fetch_row($result);
echo "$row[0] $row[1] $row[2]";
?>