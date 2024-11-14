<?php

include('login-auth/config.php');

if(isset($_GET['id'])){

 $id = $_GET['id'];

 $sql = "DELETE FROM blog WHERE id = '$id'";
 $run = mysqli_query($conn,$sql);

 if($run){

    header('location:view-blog-data.php');
 }else{

    header('location:view-blog-data.php');
 }
}


?>