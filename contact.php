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
                    <li class="nav-item mx-3"><a href="services">Services</a></li>
                    <li class="nav-item mx-3"><a href="blog">Blogs</a></li>
                    <li class="nav-item mx-3"><a href="careers">Careers</a></li>
                    <li class="nav-item mx-3"><a href="contact" class="active">Contact Us</a></li>
                
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
                <h3>Contact Us</h3>
                <p>HOME / CONTACT US</p>
            </div>
        </div>
    </section>




    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #f8f9fa;
}
        .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px 20px;
}

.contact-section {
    text-align: center;
    padding: 50px 0;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.section-description {
    color: #666;
    font-size: 14px;
    margin-bottom: 30px;
}

.contact-info {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.contact-details {
    flex: 1;
    background-color: #fff;
    padding: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    border-top: 2px solid #0353a884;  
    border-bottom: 2px solid #0353a884; 
    border-radius: 0; 
}

.contact-details:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 6px rgba(98, 96, 96, 0.533);
}

.contact-item {
    display: flex;
    align-items: center;
    text-align: left;
    margin-bottom: 30px;
}


.icon {
    width: 40px;
    height: 40px;
    background-color: #f1f3f5;
    border-radius: 50%;
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 20px;
    color: #007bff;
    margin-right: 15px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.icon:hover {
  background-color: #00336695;
  color: #fff;
}

.social-icon {
    width: 40px;
    height: 40px;
    background-color: #f1f3f5;
    border-radius: 50%;
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 20px;
    
    margin-right: 15px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.social-icon:hover {
  background-color: #013161c9;
}

.social-icon:hover  i{
  color: #fff;
  z-index: 1;
}

.info h4 {
  margin: 0;
  font-size: 18px;
  font-weight: bold;
  color: #003366;
}

.info p {
  margin: 5px 0 0;
  color: #6c757d;
}

.map iframe {
    width: 100%;
    height: 200px;
    border: none;
}

.contact-form {
    flex: 1;
    background-color: #fff;
    padding: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-top: 2px solid #0353a884;
    border-bottom: 2px solid #0353a884;
    border-radius: 0; 
    transition: transform 0.3s ease-in-out;
}

.contact-form:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 6px rgba(98, 96, 96, 0.533);
}

.form-group {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group input {
    flex: 1;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease-in-out;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease-in-out;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
    border-color: #007bff;
}

textarea {
    resize: none;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 12px 30px;
    font-size: 14px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.btn:hover {
    background-color: #0056b3;
}
</style>
    <section class="contact-section">
        <div class="container section-title mt-5">
            <p>Connect To Us Below<br></p>
            <hr id="short"/>
        </div>
        <div class="container">
            <!--p class="section-description">Virtora Sub-heading</p-->
            <div class="contact-info">
                <div class="contact-details small-section">
                    <div class="contact-item">
                        <div class="icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="info">
                            <h4>Call Us</h4>
                            <p>020 3501 2571</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="info">
                            <h4>Email Us</h4>
                            <p>info@virtoraservices.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/profile.php?id=61566310476696&mibextid=rS40aB7S9Ucbxw6v"><i class="bi bi-facebook"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="https://www.instagram.com/virtoraservices?igsh=dnY5YWZ1dm45MzNv"><i class="bi bi-instagram"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="https://www.linkedin.com/company/dursun-services/"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.411500252538!2d73.92425807495623!3d18.456319383874804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea7b4f6c9ff7%3A0xcbb3458f3fd96b5f!2sVaishnavi%20City%20Phase%202%2C%20Handewadi%20Pune%2C%20412308!5e0!3m2!1sen!2sin!4v1696318828374!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
    
                <div class="contact-form small-section">
                    <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="352d5103-9b30-4731-87f0-92a2f164f091">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <input type="text" name="query" placeholder="Type of query" required>
                        <!--input type="text" name="subject" placeholder="Subject" required-->
                        <textarea name="message" rows="6" placeholder="Message" required></textarea>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


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
