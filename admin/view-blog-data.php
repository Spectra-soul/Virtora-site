<?php include('includes/admin-header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                        <h5 class="card-header-text">View Blog Data</h5>
                        
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table display" id="myTable">
                                 <thead>
                                    <tr>
                                       <th>Blog Title</th>
                                       <th>Linkedin Link</th>
                                       <th>Date-Time</th>
                                       <th>Image</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>

                                 <?php
                                   include('login-auth/config.php');

                                   $sql = "SELECT * FROM blog";
                                   $run = mysqli_query($conn, $sql);
                                   while($row =  mysqli_fetch_array($run))
                                   {

                                    ?>

                                    <tr>
                                    <td><?php echo $row['blog_title']; ?></td>
                                    <td><?php echo $row['linkedin_link']; ?></td>
                                    <td><?php echo $row['date_time']; ?></td>
                                    <td><img src="assets/images/blog-image/<?php echo $row['image']; ?>" width="50px" height="50px"></td>
                                    
                                    <td colspan="2"><a href="update-blog.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a href="delete-blog.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger delete-btn" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash-o"></i></a></td>
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


<script>
    $(document).ready(function() {
        // When the delete button is clicked
        $('.delete-btn').click(function(e) {
            e.preventDefault(); // Prevent the default action (the link click)

            var deleteUrl = $(this).attr('href'); // Get the link URL

            // Show confirmation dialog using SweetAlert2
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // If the user confirms, redirect to the PHP delete script
                    window.location.href = deleteUrl;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    );
                }
            });
        });
    });
</script>
 
<?php include('includes/admin-footer.php'); ?>