
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
    <form class="p-5 my-3 align-items-center" style="max-width:600px;" action="login-auth/admin-register-process.php" method="post">
       <h1 style="text-align:center;">Admin Register</h1>         
<div class="form-group">
     <label for="exampleInputPassword1" class="form-control-label">Name</label>
         <input type="text" class="form-control"  placeholder="Name" name="uname" required>
         
 </div>

 <div class="form-group">
     <label class="form-control-label">Email</label>
     <input type="email" class="form-control"  placeholder="email" name="email"  required>
     
 </div>

 <div class="form-group">
     <label class="form-control-label">Phone</label>
     <input type="text" class="form-control"  placeholder="Phone" name="phone"  required>
     
 </div>

 <div class="form-group">
     <label class="form-control-label">Phone</label>
     <input type="password" class="form-control"  placeholder="Password" name="password"  required>
     
 </div>
  

<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Submit
 </button>

</form>

</div>
</div>

</div>
</div>
</div>      


<?php include('includes/admin-footer.php'); ?>