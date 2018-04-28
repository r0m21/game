<?php


$servername = "35.204.244.229";
$username = "hackathon";
$password = "Hackathon2018";

try 
{
    $pdo = new PDO("mysql:host=$servername;dbname=seriousgame;charset=utf8;", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}