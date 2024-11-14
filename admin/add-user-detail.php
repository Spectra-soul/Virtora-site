
<?php include('includes/admin-header.php'); ?>
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
    <form class="p-5 my-3 align-items-center" style="max-width:600px;" action="user-details-process.php" method="post">
                
 <div class="form-group">
     <label class="form-control-label">Registration Number</label>
     <input type="text" class="form-control" name="registration-no"  placeholder="Registration Number" required>
     
 </div>

 <div class="form-group">
     <label class="form-control-label">Name</label>
     <input type="text" class="form-control" name="uname"  placeholder="Name" required>
     
 </div>
  
<div class="form-group">
     <label for="exampleSelect1" class="form-control-label">Gender</label>
         <select class="form-control" name="gender">
             <option value="male">Male</option>
             <option value="female">Female</option>
             <option value="other">Other</option>

         </select>
 </div>

<div class="form-group">
     <label for="exampleInputPassword1" class="form-control-label">DOD</label>
         <input type="date" class="form-control"  placeholder="DOD" name="dod" required>
         
 </div>

 <div class="form-group">
     <label class="form-control-label">Name of Mother</label>
     <input type="text" class="form-control"  placeholder="Name of Mother" name="mother-name">
     
 </div>

 <div class="form-group">
     <label class="form-control-label">Name of Father</label>
     <input type="text" class="form-control"  placeholder="Name of Father" name="father-name">
     
 </div>
  

  <div class="form-group">
     <label for="exampleTextarea" class="form-control-label">Place of Death</label>
         <textarea class="form-control" id="exampleTextarea" rows="4" name="death-place" required></textarea>
 </div>
  
 
  
 <div class="form-group">
     <label for="exampleInputPassword1" class="form-control-label">Registration Date</label>
         <input type="date" class="form-control"  placeholder="Registration Date" name="registration-date" requi>
         
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