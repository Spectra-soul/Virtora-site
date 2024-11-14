<?php

$servername = "localhost";
$username = "u188901242_virtora";
$password = "Virtora@services400";
$database = "u188901242_virtora";

// create connection

$conn = new mysqli($servername,$username,$password,$database);


// check connection

if($conn->connect_error){

    die("failed to connect: ". $conn->connect_error);

}else{

    // echo "connected success!";
}

?>