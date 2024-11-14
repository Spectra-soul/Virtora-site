<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin-Register</title>

	 <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  			<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="codedthemes">
	<meta name="keywords"
	content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="codedthemes">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">



</head>
<body>
	<section class="login common-img-bg">
		<!-- Container-fluid starts -->
		<div class="container-fluid">
			<div class="row">
					<div class="col-sm-12">
						<div class="login-card card-block bg-white">
							<form  action="admin-register-process.php" method="post">
								<div class="text-center">
									<img src="../assets/images/logo-2.png" alt="logo" width="200px" height="100px">
								</div>
								<h3 class="text-center txt-primary">Create an account </h3>

                                <?php

                                  if(isset($_SESSION['msg'])){

                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  }

                                ?>
								
                                <div class="md-input-wrapper">
									<input type="text" name="uname" class="md-form-control" required="required">
									<label>Name</label>
								</div>
								<div class="md-input-wrapper">
									<input type="email" name="email" class="md-form-control" required="required">
									<label>Email </label>
								</div>

                                <div class="md-input-wrapper">
									<input type="text" name="phone" class="md-form-control" required="required">
									<label>Phone </label>
								</div>

                                
								<div class="md-input-wrapper">
									<input type="password" name="password" class="md-form-control" required="required">
									<label>Password</label>
								</div>
								

								
								<!-- <div class="col-xs-10 offset-xs-1"> -->
									<button type="submit" name="submit"  class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">Sign up
                                 </button>
								<!-- </div> -->
								
							</form>
							<!-- end of form -->
						</div>
						<!-- end of login-card -->
					</div>
					<!-- end of col-sm-12 -->
				</div>
				<!-- end of row-->
			</div>
			<!-- end of container-fluid -->
	</section>

	
      <!-- Warning Section Ends -->


   <!-- Required Jqurey -->
   <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
   <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="../assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!--text js-->
   <script type="text/javascript" src="../assets/pages/elements.js"></script>
</body>
</html>
