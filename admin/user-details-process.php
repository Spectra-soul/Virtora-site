<?php

include('login-auth/config.php');

if(isset($_POST['submit'])){

    echo $registrationNo = strtoupper($_POST['registration-no']);
    echo "<br>";
    echo $userName = strtoupper($_POST['uname']);
    echo "<br>";
    echo $gender = strtoupper($_POST['gender']);
    echo "<br>";
    echo $dod = $_POST['dod'];
    echo "<br>";
    echo $motherName = strtoupper($_POST['mother-name']);
    echo "<br>";
    echo $fatherName = strtoupper($_POST['father-name']);
    echo "<br>";
    echo $deathPlace = strtoupper($_POST['death-place']);
    echo "<br>";
    echo $registrationDate = $_POST['registration-date'];
    echo "<br>";
    echo $sId = "sid-" .rand(9999999, 1111111);

    $sql = "INSERT INTO `user_datail`(`registration_no`, `user_name`, `gender`, `dod`, `mother_name`, `father_name`, `death_place`, `registration_date`, `s_id`, `created_by`, `created_at`) VALUES ('$registrationNo','$userName','$gender','$dod','$motherName','$fatherName','$deathPlace','$registrationDate','$sId','','')";
    $run = mysqli_query($conn,$sql);

    if($run){

        header('location:add-user-detail.php');

        $_SESSION['user-detail'] = "<h5 style='color:green;text-align:center;'>User Register succees !</h5>";
    
    }else{

        header('location:add-user-detail.php');

        $_SESSION['user-detail'] = "<h5 style='color:red;text-align:center;'>Failed to insert, Try again !</h5>";
    }

}

?>