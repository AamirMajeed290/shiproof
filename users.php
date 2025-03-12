<?php

include("connection.php");

$query="SELECT * FROM `users` WHERE 1";

$users=$conn->query($query);

print_r($users);


?>