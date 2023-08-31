<?php
//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=testdb;port=3308", "Aziko", "Pipiqvoy1885");

session_start();

$_SESSION["user_id"] = "1";

?>