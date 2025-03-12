<?php

$serverName="192.168.10.20";
$databaseName="shiproof";
$userName="root";
$password="root";

//$conn= new mysqli($serverName,$userName,$password,$databaseName);
$conn= new PDO("mysql:host=".$serverName.";dbname=".$databaseName,$userName,$password);

?>
