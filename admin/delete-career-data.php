<?php

include('login-auth/config.php');

if(isset($_GET['id'])){

 $id = $_GET['id'];

 $sql = "DELETE FROM career_data WHERE id = '$id'";
 $run = mysqli_query($conn,$sql);

 if($run){

    header('location:view-career-data.php');
 }else{

    header('location:view-career-data.php');
 }
}


?>