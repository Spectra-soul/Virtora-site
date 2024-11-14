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
        <a class="navbar-brand" href="index.php">
            <img src="./assets/img/logo.png" alt="Logo">
        </a>
        
        <!-- Navbar Toggle for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Middle: Nav Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item mx-3"><a href="index" >Home<br></a></li>
                    <li class="nav-item mx-3"><a href="about">About Us</a></li>
                    <li class="nav-item mx-3"><a href="services" class="active">Services</a></li>
                    <li class="nav-item mx-3"><a href="blog">Blogs</a></li>
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
                <h3>Services</h3>
                <p>HOME / SERVICES</p>
            </div>
        </div>
    </section>

    

    <!-- Services Section -->
    <section id="services" class="services mb-5">
        <div class="container section-title">
            <p>Check Our Services<br></p>
            <hr id="short"/>
        </div>

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 small-section">
                    <div class="service-item item-cyan position-relative">
                        <i class="bi bi-headset icon"></i>
                        <h3>Customer Support</h3>
                        <p>
                            Our customer support team offers 24/7 assistance via phone, email, and chat, delivering prompt and effective solutions to enhance client satisfaction and loyalty.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 small-section">
                    <div class="service-item item-violet position-relative">
                        <i class="bi bi-server icon"></i>
                        <h3>Data Management</h3>
                        <p>
                            We provide comprehensive data management services, including data entry, processing, and maintenance, ensuring accuracy and easy accessibility for informed decision-making.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 small-section">
                    <div class="service-item item-teal position-relative">
                        <i class="bi bi-tools icon"></i>
                        <h3>Technical Support</h3>
                        <p>
                            Our technical support services troubleshoot and resolve client issues efficiently, offering expert guidance on software and hardware inquiries to minimize downtime.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->


    <!-- Industries Section-->
    <section id="stats" class="stats my-5">
        <div class="container section-title">
            <p>Industries We Support<br></p>
            <hr id="shorts"/>
        </div>

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-cart color-blue flex-shrink-0"></i>
                        <div>
                            <p>E-commerce</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-heart-pulse color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                        <div>
                            <p>Healthcare</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-graph-up color-green flex-shrink-0" style="color: #15be56;"></i>
                        <div>
                            <p>Finance</p>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-broadcast color-pink flex-shrink-0" style="color: #8e0cab;"></i>
                        <div>
                            <p>Telecommunications</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-airplane color-pink flex-shrink-0" style="color: #bb0852;"></i>
                        <div>
                            <p>Travel and Hospitality</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-shop color-pink flex-shrink-0" style="color: #938309;"></i>
                        <div>
                            <p>Retail</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-laptop color-pink flex-shrink-0" style="color: #0b1862;"></i>
                        <div>
                            <p>Technology</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 small-section">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-shield-lock color-green flex-shrink-0" style="color: #1f4a0f;"></i>
                        <div>
                            <p>Banking & Insurance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- industries section -->


    <!-- Service speech -->
    <section id="" class="service-speech section">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <div class="service-content">
                        <p>By partnering with Virtora Services, you gain a dedicated ally focused on optimizing your operations and driving success across these diverse industries.</p>                       
                        <div class="text-center text-lg-start">
                            <a href="contact.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Contact us today to learn more!</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Speech section-->


    <footer id="footer" class="footer">

        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-6 footer-about">
              <a href="index.php" class="d-flex align-items-center">
                <img src="./assets/img/logo3.png" alt="Logo">
              </a>
              <div class="footer-contact pt-3">
                <p>Vaishnavi city phase 2</p>
                <p>Handewadi Pune 412308</p>
                <p class="mt-3"><strong>Phone:</strong> <a href="tel:02035012571">020 3501 2571</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@virtoraservices.com">info@virtoraservices.com</a></p>
              </div>
            </div>
    
            <div class="col-lg-4 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="about.php">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="services.php">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="careers.php">Careers</a></li>
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