<?php
session_start();

include('config.php');

if(isset($_POST['submit'])){

    
    echo $email = $_POST['email'];
    echo "<br>";
     $password = $_POST['password'];

    $_SESSION['email'] = $email;

    $sql = "SELECT * FROM admin_auth WHERE email = '$email'";
    $run = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($run);

    $row = mysqli_fetch_array($run);

   echo $hashPsw = $row['password'];

//    die();

    if($count > 0){

        if(password_verify($password, $hashPsw)){

            $_SESSION['msg-login'] = "<h6 style='color:green;text-align:center'>You are Login now !</h6>";

            header('location:../dashboard.php');
        
        }else{
           
            $_SESSION['msg-login'] = "<h6 style='color:red;text-align:center'>Failed to Login, Try again !</h6>";
            header('location:../index.php');
        }
    }



}
?>