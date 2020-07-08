<?php
$dbHost   ='localhost';
$dbUsername ='root';
$dbPassword ='';
$dbName ='erpdb';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Check connection
if($db->connect_error){
    die("connection failed: " . $db->connect_error);
}