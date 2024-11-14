<?php
include('config.php');

if(isset($_POST['submit'])){

$new_id = $_POST['new_id'];

   echo $student_id = 'sree'.'-'. rand(1111,6666);
   echo $student_name = $_POST['student_name'];
   echo $father_name = $_POST['father_name'];
   echo $dob = $_POST['dob'];
   echo $mobile = $_POST['mobile'];
   echo $parent_contact = $_POST['parent_contact'];
   echo $email = $_POST['email'];
   echo $gender = $_POST['gender'];
   echo $joining_date = $_POST['joining_d'];
   
   echo $state = $_POST['state'];
   echo $city = $_POST['city'];
   echo $address = $_POST['address_details'];
   echo $course_type = $_POST['course_type'];
   echo $batch_type = $_POST['batch_type'];
   echo $roll = $_POST['roll'];
   echo $any_details = $_POST['some_details'];
   echo $student_username = $_POST['student_username'];
   echo $student_password = $_POST['student_password'];


   $profileImage = $_FILES['profile_image']['name'];
    $profile_tmp_img = $_FILES['profile_image']['tmp_name'];
   //old image 


   $oldImage = $_POST['old_profile_image'];

   if(!empty($_FILES['profile_image']['name'])){
    
    $extension = pathinfo($profileImage,PATHINFO_EXTENSION);
   $rename = $student_username.rand(1111,9999).'.'.$extension;

      //delete image from folder
       $Target_Path_To_SelectedImg = "profile_image/".$oldImage;
        unlink($Target_Path_To_SelectedImg);
    }else{
    $rename = $oldImage;

   }

   $sql = "UPDATE `enroll` SET `name`='$student_name',`father_name`='$father_name',`dob`='$dob',`mobile`='$mobile',`parent_contact`='$parent_contact',`email`='$email',`gender`='$gender',`image`='$rename',`joining_date`='$joining_date',`state`='$state',`city`='$city',`address`='$address',`course_type`='$course_type',`batch_type`='$batch_type',`roll`='$roll',`any_details`='$any_details',`username`='$student_username',`password`='$student_password' WHERE `id` = '$new_id'";
   $run = mysqli_query($conn,$sql);
   if($run){

      move_uploaded_file($_FILES['profile_image']['tmp_name'],"profile_image/".$rename);
      header('location:list_enroll.php');

   }else{
    
     header('location:list_enroll.php');


   }

}







?>