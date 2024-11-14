<?php
session_start();

include('config.php');

if(isset($_POST['submit'])){

    echo $name = $_POST['uname'];
    echo $email = $_POST['email'];
    echo $phone = $_POST['phone'];
    echo $password = $_POST['password'];
    echo "<br>";
    echo $hashPassword = password_hash($password, PASSWORD_DEFAULT);




    $sql = "INSERT INTO `admin_auth`(`fullname`, `email`, `password`, `phone`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES ('$name','$email','$hashPassword','$phone','','','','')";
    $run = mysqli_query($conn, $sql);



if($run){

echo "Data inserted success !";

$_SESSION['msg'] = "<h3 style='color:green;text-align:center'>Register data inserted success !</h3>";

header('location:../admin-register-new.php');

}else{

    header('location:../admin-register-new.php');

    $_SESSION['msg'] = "<h3 style='color:green;text-align:center'>Failed to insert, Something error !</h3>";
 }

}


