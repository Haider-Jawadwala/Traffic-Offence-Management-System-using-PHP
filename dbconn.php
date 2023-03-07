<?php
$dbserver='localhost';
$dbuser='root';
$dbpass='';
$dbname='test';
$conn=new mysqli ($dbserver, $dbuser, $dbpass, $dbname);
if($conn->connect_error) die ($conn->connect_error);
?>