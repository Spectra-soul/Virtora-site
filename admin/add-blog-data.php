
<?php include('includes/admin-header.php'); ?>

<?php 
if(isset($_SESSION['email'])){

}else{

    header('location:index.php');
}

?>
<?php include('includes/admin-top-header.php'); ?>
<?php include('includes/admin-sidebar.php'); ?>
<!-- <div class="content-wrapper">
         
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>
            
            <div class="row dashboard-header">



             </div>
</div> -->


<div class="content-wrapper">
         
<div class="container-fluid ">
<div class="row">
    <div class="main-header">
        <h4>Dashboard</h4>

        <?php
         
         if(isset($_SESSION['user-detail'])){

            echo $_SESSION['user-detail'];
            unset($_SESSION['user-detail']);
         }

        ?>
    </div>
</div>

<div class="container-fluid my-3 p-5"> 
<div class="row dashboard-header">
    <div class="col-md-8" class="text-center">
    <div class="card">
   
    <form class="p-5 my-3 align-items-center" style="max-width:600px;" action="add-blog-process.php" method="post" enctype="multipart/form-data">
    <h2 class="text-center" style="padding-top:20px;">Add Blog Post</h2>       
 <div class="form-group">
     <label class="form-control-label">Blog Title</label>
     <input type="text" class="form-control" name="blog-title"  placeholder="Blog Title" required>
     
 </div>

 <div class="form-group">
     <label class="form-control-label">Add Linkedin Link</label>
     <input type="text" class="form-control" name="linkedin-link"  placeholder="Add Linkedin Link" required>
     
 </div>
  

<div class="form-group">
     <label class="form-control-label">Upload Blog Picture</label>
     <input type="file" class="form-control"  name="image">
     
 </div>


 <div class="form-group">
     <label class="form-control-label">Date Time</label>
     <input type="datetime-local" class="form-control" name="date-time"  placeholder="Add Linkedin Link" required>
     
 </div>

 

  <!-- <div class="form-group">
     <label for="exampleTextarea" class="form-control-label">Blog Description</label>
         <textarea class="form-control" id="exampleTextarea" rows="4" name="client-description" required></textarea>
 </div> -->
  
 
  
 
  
 
<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Submit
 </button>

</form>

</div>
</div>

</div>
</div>
</div>      


<?php include('includes/admin-footer.php'); ?>