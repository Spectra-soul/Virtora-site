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
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard </h4>

                  <h5 style="text-align:center;color:green;"><?php echo $_SESSION['email']; ?></h5>
                  <hr>
						<?php

                     if(isset($_SESSION['msg-login'])){

                     echo $_SESSION['msg-login'];
                     unset($_SESSION['msg-login']);
                     }

                     ?>
               </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">

            <?php 
                  include('login-auth/config.php');
                  $sql1 = "SELECT * FROM `career_data`";
                  $run1 = mysqli_query($conn, $sql1);

                  $dataCount = mysqli_num_rows($run1);


            ?>


            

       

         

        

         

        
        
           
          


          
               
            <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>CAREER DATA</span>
                     <h2 class="dashboard-total-products"><?php echo $dataCount; ?> </h2>
                     <span class="label label-warning">TOTAL</span>
                     <div class="side-box">
                        <i class="ti-signal text-warning-color"></i>
                     </div>
                  </div>
               </div>
             


            </div>


            
          
      </div>
   </div>

<?php include('includes/admin-footer.php'); ?>