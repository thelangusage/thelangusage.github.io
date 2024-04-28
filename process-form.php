<?php 

$name=$_POST["name"];
$email=$_POST["email"];
$reason=$_POST["reason"];
$message=$_POST["message"];

if(! $terms){
    die("Terms must be accepted");
}

$host="localhost";
$dbname="message_db";
$username="root";
$password="";

$conn= mysqli_connect(hostname:$host,username: $username, password: $password, database: $dbname);


if(mysqli_connect_errno()){
    die("connection error:".mysqli_connect_error());
}

echo "Connection successful.";
