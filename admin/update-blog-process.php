<?php
include('login-auth/config.php');


if(isset($_POST['submit'])){

   echo $newId =  $_POST['new-id'];  
   echo $blogTitleUpdate = $_POST['blog-title-update'];
   echo $linkedinLinkUpdate = $_POST['linkedin-link-update'];
   echo $dateTimeUpdate = $_POST['date-time-update'];



   $updateImage = $_FILES['image-update']['name'];
   $updateTmpName = $_FILES['image-update']['tmp_name'];

 
   $oldImage = $_POST['old_blog_image'];

   if(!empty($_FILES['image-update']['name'])){
     
      $extension = pathinfo($updateImage,PATHINFO_EXTENSION);
       $updateBlogImgRename = 'blog-'.rand(1111,9999).'.'.$extension;

      //delete image from folder
      $Target_Path_To_SelectedImg = "assets/images/blog-image/".$oldImage;
      unlink($Target_Path_To_SelectedImg);

   }else{
      $updateBlogImgRename = $oldImage;
   }

//    $sql1 = "UPDATE `testimonial` SET `client_name`='$updateClientName',`client_profession`='$updteClientProfession',`image`='$updateTestimonialImgRename',`client_description`='$updateClientDescription ' WHERE `id` = '$newId'";

   $sql1 = "UPDATE `blog` SET `blog_title`='$blogTitleUpdate',`linkedin_link`='$linkedinLinkUpdate',`image`='$updateBlogImgRename',`date_time`='$dateTimeUpdate' WHERE `id` = '$newId'";
   $run1 = mysqli_query($conn, $sql1);

   if($run1){
       
      move_uploaded_file($_FILES['image-update']['tmp_name'],"assets/images/blog-image/".$updateBlogImgRename);
      
      header('location:view-blog-data.php');

   }else{

      header('location:view-blog-data.php');
   }
}


?>