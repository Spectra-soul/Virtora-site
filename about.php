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
            
            <li class="nav-item mx-3"><a href="index">Home<br></a></li>
                    <li class="nav-item mx-3"><a href="about" class="active">About Us</a></li>
                    <li class="nav-item mx-3"><a href="services">Services</a></li>
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
                <h3>About Us</h3>
                <p>HOME / ABOUT US</p>
            </div>
        </div>
    </section>



    <!-- About-Speech-Top -->
    <style>
        /* General Styles */
        body {
        margin: 0;
        padding: 0;
        }

        .about-section {
        padding: 60px 20px;
        background-color: #f9f9f9;
        }

        .container {
        max-width: 1200px;
        margin: 0 auto;
        }

        .about-content {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
        }

        /* Left Column Styles */
        .about-text {
        flex: 1;
        max-width: 50%;
        }

        .about-text h5 {
        text-transform: uppercase;
        margin-bottom: 10px;
        color: color-mix(in srgb, var(--default-color), transparent 40%);
        font-size: 1rem;
        }

        .about-text h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #325368;
        margin-bottom: 20px;
        }

        .about-text p {
        font-size: 1rem;
        margin-bottom: 20px;
        color: #000000;
        text-align: justify;
        }

        /* Right Column: Image Grid */
        .about-images {
        flex: 1;
        max-width: 50%;
        justify-content: center;
        align-items: center;
        align-content: center;
        text-align: center;
        }

        .image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        }

        .image-grid img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
        }

        .small-grid {
        display: grid;
        grid-template-rows: 1fr 1fr;
        gap: 15px;
        }

        .small-grid img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
        .about-content {
            flex-direction: column;
        }

        .about-text, .about-images {
            max-width: 100%;
        }

        .image-grid {
            grid-template-columns: 1fr 1fr;
        }

        .grid-large {
            grid-row: span 1; /* Adjust for smaller screens */
        }
        }
    </style>
    <section class="about-section section">
        <div class="container">
            <div class="about-content">
                <!-- Left Column: Text Section -->
                <div class="about-text">
                    <h5>Who We Are</h5>
                    <h2>Konw About Us</h2>
                    <p class="">
                        At Virtora Services, we’re passionate about redefining the outsourcing experience. Our mission is to provide innovative solutions that truly enhance your operational efficiency and support your business growth. 
                        <br/><br/>
                        We believe in the power of collaboration, working closely with each client to understand their unique needs and tailor our services accordingly. Our dedicated team takes pride in building genuine partnerships, ensuring you feel supported every step of the way.
                        <br/><br/>
                        With a strong commitment to excellence and integrity, we aim to not just meet expectations but exceed them. At Virtora Services, we’re excited to join you on your journey and help shape a successful future for your business.
                    </p>           
                </div>
        
                <!-- Right Column: Images Section -->
                <div class="about-images justify-content-center align-items-center small-section">
                    <div class="image-grid ">
                        <img src="./assets/img/office-1.jpg" alt="Teamwork Image 1" class="grid-large">
                        <div class="small-grid">
                            <img src="./assets/img/office-3.jpg" alt="Teamwork Image 2">
                            <img src="./assets/img/office-2.jpg" alt="Teamwork Image 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Speech-Top -->

    
    <style>
        .code-conduct {
            padding: 60px 20px;
        }

        .code-conduct .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #e3e0e0aa;
        }

        .coc-content {
            display: flex;
            flex-wrap: wrap;
        }

        /* Left Column Styles */
        .coc-head {
            flex: 1;
            max-width: 25%;
            width: 25%;
            height: 350px;
            align-content: center;
            background: linear-gradient(220deg, #44718c, #658ba3, #2b4352, #84a1b8);
            z-index: 1 !important;
        }
        .coc-head .header-text {
            margin:20px;
            text-align: center;
        }
        .coc-head h1 {
            color:white;
            font-size: 3rem;
        }
        .coc-text {
            flex: 1;
            max-width: 70%;
            padding: 0px 15px;
            align-content: center;
            position: relative; /* Ensure it stays in line */ 
        }
        .coc-text p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #000;
            text-align: justify;
            animation: slideInLeft 1s ease;
        }

        @keyframes slideInLeft {
            0% { opacity: 0; transform: translateX(-50%); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideInDown {
            0% { opacity: 0; transform: translateY(-50%); }
            100% { opacity: 1; transform: translateY(0); }
        }


        @media(max-width: 1150px) {
            .coc-head.header-text {
                margin: 20px;
            }
            .coc-head h1 {
                font-size: 2.7rem;
            }
        }

        @media(max-width: 992px) {
            .coc-head.header-text {
                margin: 10px;
            }
            .coc-head h1 {
                font-size: 2.3rem;
            }
        }

        @media(max-width: 880px) {
            .code-conduct .container {
                background-color: white;
            }
            .coc-content {
                flex-direction: column;
                background-color: #e3e0e0aa;
            }
            .coc-head {
                margin-top: 15px;
                width:100%;
                height:300px;
            }
            .coc-head, .coc-text {
                max-width: 100%;
                padding: 20px 30px;
            }
            .coc-head.header-text {
                margin: 0px;
                padding: 0;
                
            }
            .coc-head h1 {
                font-size: 2.3rem;
            }
            .coc-text p {
                animation: slideInDown 1s ease;
            }
        }
    </style>
    <section class="code-conduct mt-5 section">
        <div class="container">
            <div class="coc-content">
                <div class="coc-head">
                    <div class="header-text">
                        <h1>Our Code Of Conduct</h1>
                    </div>
                </div>
                <div class="coc-text">
                    <div class="w-100">
                        <p>
                            At Virtora Services, we foster a culture of respect, collaboration, and continuous improvement. Our code of conduct emphasizes integrity, professionalism, and accountability in all interactions, ensuring trust and transparency.
                            <br/><br/>
                            We value open communication and diverse perspectives, believing they lead to better solutions. Our commitment is to create a workplace where everyone feels valued and empowered, driving both organizational success and personal growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Leaders Section -->
    <style>
        .leaders {
            padding-bottom: 0px;
            margin-bottom: 0px;
        }
     </style>
    <section id="" class="leaders section mt-5" style="background-color: #f9f9f9;;">
        <div class="container section-title mt-5">
            <p>Our Leadership<br></p>
            <hr id="short"/>
        </div>
    </section>


    <!-- Carousel -->
    <style>
        .leaders-speech {
            display: flex;
            justify-content: center;
            padding-bottom: 40px;
            background-color: #f9f9f9;
        }

        .leaders-content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background-color: #fff; 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;  
            margin: 0 auto;
            align-items: center;
        }

        .image-container {
            width: 33%;
            border-radius: 5%;
            padding-top: 20px;
        }

        .image-container img {
            width: 100%;
            border-radius: 10px;
        }

        .text-content {
            color: #333;
            max-width: 65%; 
            padding: 0px 50px;
        }

        .text-content h4 {
            font-size: 20px;
            font-weight: bold;
        }

        .text-content p {
            font-size: 14px;
            color: #5d2323;
            text-align: justify;
        }

        .text-content blockquote {
            font-size: 16px;
            color: #555;
            position: relative;
            padding-left: 20px;
        }

        .text-content blockquote:before {
            content: '“';
            font-size: 30px;
            position: absolute;
            left: 0;
            top: 0;
            color: #f0c05a;
        }

        .text-content blockquote:after {
            content: '”';
            font-size: 30px;
            position: absolute;
            bottom: 0;
            right: -10px;
            color: #f0c05a;
        }

        @media(max-width: 1016px){
            .leaders-content {
                flex-direction: column;
                margin: 20px;
            }

            .image-container, .text-content {
                max-width: 100%;
                padding: 0px 15px;
            }
            .image-container {
                width: 270px;
                height: auto;
                justify-content: center;
                align-items: center;
                align-content: center;
                text-align: center;
                overflow: hidden;
                margin-top: 10px;
            }
            .image-container img{
                width: 250px;
                border-radius: 7%;
            }
            .second-image {
                display: flex;
                flex-direction: column-reverse;
            }
            .text-content h4, .text-content p{
                text-align: center;
            }

            blockquote {
                text-align:inherit;
            }
        }
    </style>
    <section class="leaders-speech">
        <div class="">
            <div class="leaders-item small-section">
                <div class="leaders-content">
                    <div class="image-container">
                        <img src="./assets/img/ceo2.png" class="d-block" alt="Person Image">
                    </div>
                    <div class="text-content">
                        <h4>Durgesh Madnekar</h4>
                        <p>CEO/Founder</p>
                        <blockquote>
                            At Virtora Services, we are on a mission to redefine the outsourcing landscape. Our focus is on crafting innovative solutions that not only meet our clients' needs but also drive their growth in an ever-evolving market. 
                            <br/><br/>I strongly believe that genuine success blossoms from teamwork and confidence. Our exceptional team embodies this belief wholeheartedly, working tirelessly to establish meaningful collaborations. We're not just here to offer services; our aim is to ignite your success.
                            <br/><br/>We appreciate you being part of this thrilling journey as we shape tomorrow together.
                        </blockquote>
                    </div>
                </div>
            </div>
            <br/><br/>
            <div class="leaders-item small-section">
                <div class="leaders-content second-image">
                    <div class="text-content">
                        <h4>Suraj Amzare</h4>
                        <p>Co-Founder/Chief Financial Officer</p>
                        <blockquote>
                            Our mission revolves around revolutionizing the approach businesses take towards outsourcing. As one of the Co-Founders and the Chief Financial Officer, my primary goal is to provide financial tactics that not only empower our clients but also assist them in realizing their expansion aspirations. 
                            <br/><br/>In my view, honesty and openness play a pivotal role in establishing trust. Our team of skilled professionals works hand in hand with our clients to craft tailored solutions that not only foster success but also fortify relationships. Together, we are eagerly embracing new prospects and striving towards accomplishing extraordinary outcomes. 
                        </blockquote>
                    </div>
                    <div class="image-container">
                        <img src="./assets/img/co-founder2.png" class="d-block" alt="Person Image">
                    </div>
                </div>
            </div>
            <br/><br/>
            <div class="leaders-item small-section">
                <div class="leaders-content">
                    <div class="image-container">
                        <img src="./assets/img/coo-1.png" class="d-block" alt="Person Image">
                    </div>
                    <div class="text-content">
                        <h4>Gandhalee Joshi</h4>
                        <p>Chief Operating Officer</p>
                        <blockquote>
                            As Chief Operating Officer, I am dedicated to ensuring operational excellence across all facets of our organization. Our mission is to deliver innovative outsourcing solutions that not only meet but exceed our clients' expectations.
                            <br/><br/>We cultivate a team-oriented atmosphere that values transparent communication and a dedication to excellence. This approach enables us to address your requirements promptly and efficiently. Working together, we strive to establish lasting relationships that promote achievement and support long-term expansion.                        
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
       
    </script>





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
