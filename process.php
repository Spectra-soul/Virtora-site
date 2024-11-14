<?php
session_start();

include('admin/login-auth/config.php');

if(isset($_POST['submit'])){

    echo $name = $_POST['uname']; 
    echo $phone = $_POST['mobile'];
    echo $email = $_POST['email'];
    echo $pan_card = $_POST['pan'];
    echo $experience = $_POST['experience'];
    echo $location = $_POST['location'];
    echo $relocate = $_POST['relocate'];
    echo $position = $_POST['position'];
    
    $resumeFile = $_FILES['resume_file']['name'];
    $tmp_name = $_FILES['resume_file']['tmp_name'];

    $extension = pathinfo($resumeFile, PATHINFO_EXTENSION);
    $renameFile = 'resume-'.rand(11111, 99999).'.'.$extension;

    // echo $nfoImgRename = 'nfo-'.rand(1111,9999).'.'.$extension;


    $sql = "INSERT INTO `career_data`(`uname`, `phone`, `email`, `pan_card`, `experience`, `location`, `relocate`, `position`, `resume_file`, `submit_at`) VALUES ('$name','$phone','$email','$pan_card','$experience','$location','$relocate','$position','$renameFile','')";
    $run = mysqli_query($conn, $sql);

    if($run){
        
        $_SESSION['msg'] = "<h5 class='text-center text-success'>Your Data Submit Successfully !</h5>";
        move_uploaded_file($_FILES['resume_file']['tmp_name'],"admin/assets/images/files-directory/".$renameFile);
        header('location:careers');
    }else{
       
        
        $_SESSION['msg'] = "<h5 class='text-center text-danger'>Failed to Submit, Something error!</h5>";
        header('location:careers');
    }
}



?>