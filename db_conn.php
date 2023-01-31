<?php
$host="localhost";
$user="root";
$pass="";
$db="to-do-list";

try{
    $conn=new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected!";
}catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}