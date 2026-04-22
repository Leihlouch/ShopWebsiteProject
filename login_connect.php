<?php

$servername = "127.0.0.1";
$port = 3306;
$username = "root";   
$password = "12345";        
$dbname = "chunkishwebsite"; 

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo "Failed to connect DB" .$conn->connect_error;
}

?>