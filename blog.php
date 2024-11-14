

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Virtora Services</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1Ek9nMhArGUKRtb6akb0dgiWvKd55A7oj6ngL4PfCOk3J8lvCj1fCwY3pOh5wsy" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <!-- Left Side: Logo -->
        <a class="navbar-brand" href="index.html">
            <img src="./assets/img/logo.png" alt="Logo">
        </a>
        
        <!-- Navbar Toggle for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Middle: Nav Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
            
            <li class="nav-item mx-3"><a href="index">Home<br></a></li>
                    <li class="nav-item mx-3"><a href="about">About Us</a></li>
                    <li class="nav-item mx-3"><a href="services">Services</a></li>
                    <li class="nav-item mx-3"><a href="blog" class="active">Blogs</a></li>
                    <li class="nav-item mx-3"><a href="careers">Careers</a></li>
                    <li class="nav-item mx-3"><a href="contact">Contact Us</a></li>

            </ul>
        </div>
    </nav>

    
    <!-- Global Banner -->
    <style>
         .global-banner {
            width: 100%;
            height: 400px;
            position: relative;
            padding: 80px 0 60px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(./assets/img/banner3.jpeg) left center no-repeat;
            background-size: cover;

            @media (max-width: 500px){
                height: 400px;
            }
        }

        .active{
            color:black;
        }

        
        .global-banner-content {
            display: flex; 
            flex-direction: column;
            align-items: center; 
            justify-content: center;
            opacity: 0;
            transform: translateY(100px);
            transition: opacity 1s ease, transform 1s ease; 
        }

        .global-banner-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .global-banner img{
            height: 90px;
            padding-top: 20px;
            @media (max-width: 500px){
                height: 60px;
            }
        }

        .global-banner h3{
            font-size: 46px;
            color:rgb(255, 255, 255);
            font-weight: bold;
            padding-top: 20px;
            @media(max-width:500px){
                font-size: 38px;
            }
        }

        .global-banner p{
            font-size: 16px;
            color:rgba(255, 255, 255, 0.668);
            font-weight: bold;
            padding-top: 20px;
            @media(max-width:500px){
                font-size: 14px;
            }
        }
    </style>
    <section id="" class="global-banner">
        <div class="container">
            <div class="global-banner-content align-items-center justify-content-center">
                <h3>Blogs</h3>
                <p>HOME / BLOGS</p>
            </div>
        </div>
    </section>

    

    <!-- Blog cards -->
    <style>
    .card {
        background-color: #b5d2e5b0;
    }
    .card-body {
        height: 200px;
        overflow: hidden;
    }
    .card-body a {
        color:#1c3461;
        text-decoration:none;
    }
    .card-body p {
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight:light;
        font-size: 14px;
        color:#434e63;
    }
    .check-more-container {
        display: flex;
        justify-content: center; 
        margin-top: 40px;
    }
    </style>

    <section class="bg-100">
        <div class="container section-title mt-5">
            <p>Check Our Blogs!<br></p>
            <hr id="short"/>
        </div>
        <div class="container">
            <div class="row g-4">

            <?php
             include('admin/login-auth/config.php');
             $sql = "SELECT * FROM blog ORDER BY id DESC";
             $run = mysqli_query($conn, $sql);
             while($row = mysqli_fetch_array($run))
             {
                ?>

             <div class="col-md-6 col-lg-4 mt-4" height="350px;">
                    <div class="card border-0 small-section">
                        <a href="#">
                            <img class="card-img-top" style="height: 243px;width: 100%;" src="admin/assets/images/blog-image/<?php echo $row['image']; ?>" alt="Featured Image" />
                        </a>
                        <div class="card-body">
                            <div class="overflow-hidden">
                                <a href="#">
                                    <h5><?php echo $row['blog_title']; ?></h5>
                                </a>
                            </div>
                            <?php 
                             
                             $fetchedDateTime = $row['date_time'];
                             $changeFormatDateTime = date("d-m-Y : h:i", strtotime($fetchedDateTime));

                            ?>
                            <div class="overflow-hidden">
                                <p class=""><?php echo $changeFormatDateTime; ?></p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block">
                                    <a class="d-flex align-items-center" href="<?php echo $row['linkedin_link']; ?>" target="_blank">
                                        Learn More
                                        <div class="overflow-hidden ms-2">
                                            <span class="d-inline-block fw-medium">&xrarr;</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


           <?php } ?>
                
           

                 <!-- <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 small-section">
                        <a href="#">
                            <img class="card-img-top" style="height: 243px;width: 100%;" src="./assets/img/blog2.png" alt="Featured Image" />
                        </a>
                        <div class="card-body">
                            <div class="overflow-hidden">
                                <a href="#">
                                    <h5>Revolutionizing Business: The Impact of BPO on Digital Transformation</h5>
                                </a>
                            </div>
                            <div class="overflow-hidden">
                                <p class="">October 03, 2024</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block">
                                    <a class="d-flex align-items-center" href="https://www.linkedin.com/pulse/revolutionizing-business-impact-bpo-digital-transformation-virtora-lo5yc/?trackingId=agpuYLD1QI6u9Wo6gMXh5Q%3D%3D">
                                        Learn More
                                        <div class="overflow-hidden ms-2">
                                            <span class="d-inline-block fw-medium">&xrarr;</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  -->
                
                <!-- <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card border-0 small-section">
                        <a href="https://www.linkedin.com/pulse/maximizing-efficiency-how-bpo-drives-business-growth-virtora-zmekf/">
                            <img class="card-img-top" style="height: 243px;width: 100%;" src="./assets/img/blog-3.jpg" alt="Featured Image" />
                        </a>
                        <div class="card-body">
                            <div class="overflow-hidden">
                                <a href="https://www.linkedin.com/pulse/maximizing-efficiency-how-bpo-drives-business-growth-virtora-zmekf/">
                                    <h5>Maximizing Efficiency: How BPO Drives Business Growth</h5>
                                </a>
                            </div><br/>
                            <div class="overflow-hidden">
                                <p class="">October 06, 2024</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block">
                                    <a class="d-flex align-items-center" href="https://www.linkedin.com/pulse/maximizing-efficiency-how-bpo-drives-business-growth-virtora-zmekf/">
                                        Learn More
                                        <div class="overflow-hidden ms-2">
                                            <span class="d-inline-block fw-medium">&xrarr;</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->




            </div>
            <!-- Check More Button >
            <div class="check-more-container">
                <a href="blogs.html" class="check-more-btn">Check More</a>
            </div-->
        </div>
    </section>
  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <img src="./assets/img/logo3.png" alt="Logo">
          </a>
          <div class="footer-contact pt-3">
            <p>Vaishnavi city phase 2</p>
            <p>Handewadi Pune 412308</p>
            <p class="mt-3"><strong>Phone:</strong> <a href="tel:02035012571">020 3501 2571</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@virtoraservices.com">info@virtoraservices.com</a></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="careers">Careers</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 align-items-center justify-content-center">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/profile.php?id=61566310476696&mibextid=rS40aB7S9Ucbxw6v"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/virtoraservices?igsh=dnY5YWZ1dm45MzNv"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/dursun-services/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright 2024</span> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed & Developed by <a href="https://royinformatics.com/" target="_blank">Roy Informatics</a>
      </div>
    </div>

  </footer>

    <!-- Scroll Top -->
    <button id="scroll-top"><i class="bi bi-arrow-up"></i></button>

  <!-- JS Files -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendors/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs@1.1.0/dist/purecounter_vanilla.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8c9906dc4fac3f56","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"version":"2024.8.0","token":"68c5ca450bae485a842ff76066d69420"}' crossorigin="anonymous"></script>
</body>

</html>