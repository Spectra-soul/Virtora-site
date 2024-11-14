<?php include('includes/admin-header.php'); ?>

<?php 
if(isset($_SESSION['email'])){

}else{

    header('location:index.php');
}

?>
<?php include('includes/admin-top-header.php'); ?>
<?php include('includes/admin-sidebar.php'); ?>

<div class="content-wrapper">
         
<div class="container-fluid ">
<div class="row">
    <div class="main-header">
        <h4>Dashboard</h4>




<div class="row">
               <div class="col-sm-12">
                  <!-- Basic Table starts -->
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">View Lead Mobile Data</h5>
                        
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table display" id="myTable">
                                 <thead>
                                    <tr>
                                       <th>Mobile No</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>

                                 <?php
                                   include('login-auth/config.php');

                                   $sql = "SELECT * FROM contact_no_lead ORDER BY id DESC";
                                   $run = mysqli_query($conn, $sql);
                                   while($row =  mysqli_fetch_array($run))
                                   {

                                    ?>

                                    <tr>
                                    <td><?php echo $row['mobile_no']; ?></td>
                                    
                                    <td><a href="delete-lead-no.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">DELETE</a></td>
                                 </tr>
                                <?php  } ?>
                                   
                                 
                                  
                                    
                                     

                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>

</div> 
</div> 
</div> 
</div> 
</div> 
 
<?php include('includes/admin-footer.php'); ?>