<?php

include('login-auth/config.php');

if(isset($_POST['submit'])){

 echo $blogTitle = $_POST['blog-title'];
 echo $linkedinLink = $_POST['linkedin-link'];
 echo $dateTime = $_POST['date-time'];

//   $image = $_FILES['image_name']['name'];
//   $tmp_name = $_FILES['image_name']['tmp_name'];
  
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $extension = pathinfo($image, PATHINFO_EXTENSION);
 echo $blogImgRename = 'blog-'.rand(1111,9999).'.'.$extension;

 $sql = "INSERT INTO `blog`(`blog_title`, `description`, `linkedin_link`, `image`, `date_time`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES ('$blogTitle','','$linkedinLink','$blogImgRename','$dateTime','','','','')";
 $run = mysqli_query($conn,$sql);

 if($run){
    // move_uploaded_file($_FILES['image_name']['tmp_name'],"../vehicle-image/".$vehicleImgRename);
    move_uploaded_file($_FILES['image']['tmp_name'],"assets/images/blog-image/".$blogImgRename);
    header('location:add-blog-data.php');

}else{

    header('location:add-blog-data.php');
 }
}



?>