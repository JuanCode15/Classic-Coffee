<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Classic Coffee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?php echo URL; ?>html/img/favicon.ico.png" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo URL; ?>html/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="<?php echo URL; ?>home/index" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">Classic Coffee</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="<?php echo URL; ?>home/index" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo URL; ?>home/about" class="nav-item nav-link">About</a>
                    <a href="<?php echo URL; ?>home/service" class="nav-item nav-link">Service</a>
                    <a href="<?php echo URL; ?>home/menu" class="nav-item nav-link">Menu</a>
                    <a href="<?php echo URL; ?>usuarioController/login" class="nav-item nav-link active">Login</a>
                    <a href="<?php echo URL; ?>home/contact" class="nav-item nav-link">Contact</a>
                    <a href="<?php echo URL; ?>home/reserva" class="nav-item nav-link">Reservation</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo URL; ?>html/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We've been serving</h2>
                        <h1 class="display-1 text-white m-0">Joy</h1>
                        <h2 class="text-white m-0">* Since 1950 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo URL; ?>html/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We've been serving</h2>
                        <h1 class="display-1 text-white m-0">Joy</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- BUTTON WHATSAPP -->
    <div class="div-what" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
        <a href="https://wa.me/3135982115" target="_blank" style="text-decoration: none;">
            <button id="btn-what" class="boton-flotante" style="background-color: #25d366; color: #fff; border: none; width: 60px; height: 60px; border-radius: 50%; font-size: 24px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                <i class="fab fa-whatsapp" style="color: #fff;"></i>
            </button>
        </a>
        <div style="text-align: center; margin-top: 5px; color: black; font-weight: bold;"></div>
    </div>
    <!-- END BUTTON -->


    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">ABOUT US</h4>
                <h1 class="display-4">Fresh Coffee, Timeless Moments</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <br>
                    <h1 class="mb-3">Our History </h1>
                    <p>Three friends with a shared passion for coffee decided to join forces to make their dream of opening a coffee shop a reality. After years of working together in different coffee shops, they found the perfect location and transformed it into their own cozy space. With determination and teamwork, they started serving delicious beverages. Soon, their café became a popular spot in town.
                    </p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="<?php echo URL; ?>html/img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <br>
                    <h1 class="mb-3">Our Vision</h1>
                    <p>To be the favorite meeting place of the community, offering delicious coffee drinks made with the finest artisanal beans in a cozy and friendly environment that inspires conversations, creativity, and moments of happiness.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>FAST</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>AFFORDABLE</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>WITH LOTS OF LOVE</h5>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


   <!-- Service Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">OUR SERVICES</h4>
            <h1 class="display-4">Life is too short for bad coffee</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/service-1.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-truck service-icon"></i>Fastest Home Delivery</h4>
                        <p class="m-0">In our home delivery service, speed is our priority. Enjoy the convenience of receiving your favorite coffee at your doorstep.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/service-2.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-coffee service-icon"></i>Fresh Coffee Beans</h4>
                        <p class="m-0">We carefully select the finest and most aromatic coffee beans from around the world. Each bean is grown with care and chosen for its exceptional quality.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/service-3.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-award service-icon"></i>Highest Quality Coffee</h4>
                        <p class="m-0">We take pride in offering the highest quality coffee. We are dedicated to carefully selecting the most exquisite beans from the best coffee regions in the world.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/service-4.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h4><i class="fa fa-table service-icon"></i>Online Table Reservation</h4>
                        <p class="m-0">We want to ensure that your experience is as comfortable as possible. That's why we offer the option to reserve a table so you can secure your spot and enjoy our cozy atmosphere without worries.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Offer Start -->
<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
    <div class="container py-5">
        <h1 class="display-3 text-primary mt-3">50% OFF</h1>
        <br>
        <h1 class="text-white mb-3">Special Sunday Offer</h1>
        <h4 class="text-white font-weight-normal mb-4 pb-3">Only on March 11th until August 3rd, 2024</h4>
        <form class="form-inline justify-content-center mb-4">
            <div class="input-group">
                <div class="input-group-append">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Offer End -->

<!-- Menu Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Locations</h4>
            <h1 class="display-4">Medellin</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">South</h1>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class=" mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/img-1.jpg" alt="" style="width: 140px; height: 140px; border-radius:50%;">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Itagui</h4>
                        <p class="m-2">"Visit us at our Itagüí branch and discover the unique taste of Coffee Classic in the south!"</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class=" mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/img-2.jpg" alt="" style="width: 140px; height: 140px; border-radius:50%;">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Sabaneta</h4>
                        <p class="m-2">"Come to our Sabaneta branch and enjoy the best coffee in a cozy and flavorful environment."</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class=" mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/img-3.jpg" alt="" style="width: 140px; height: 140px; border-radius:50%;">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Poblado</h4>
                        <p class="m-2">"In El Poblado, we await you to enjoy the Coffee Classic experience in the heart of the city."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-5">North</h1>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class=" mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/img-4.jpg" alt="" style="width: 140px; height: 140px; border-radius:50%;">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Bello</h4>
                        <p class="m-2">"Discover our branch in Bello, where each cup of coffee is prepared with dedication and passion for good coffee."</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class=" mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/img-5.jpg" alt="" style="width: 140px; height: 140px; border-radius:50%;">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Manrique</h4>
                        <p class="m-2">"Visit us in Manrique and be carried away by the Coffee Classic experience, where every detail counts."</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class=" mb-3 mb-sm-0" src="<?php echo URL; ?>html/img/img-6.jpg" alt="" style="width: 140px; height: 140px; border-radius:50%;">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Copacabana</h4>
                        <p class="m-2">"In Copacabana, enjoy the unique essence of Coffee Classic in a warm and familiar environment."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->


   <!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">TESTIMONIAL</h4>
            <h1 class="display-4">What Our Customers Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="<?php echo URL; ?>html/img/testimonial-1.jpg" alt="">
                    <div class="ml-3">
                        <h4>Sandra</h4>
                        <i>Doctor</i>
                    </div>
                </div>
                <p class="m-0">I love the variety of options the café offers: from classic coffees to seasonal specialty drinks, there's always something new to try.</p>
            </div>
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="<?php echo URL; ?>html/img/testimonial-2.jpg" alt="">
                    <div class="ml-3">
                        <h4>Fernando</h4>
                        <i>University Student</i>
                    </div>
                </div>
                <p class="m-0">As a student, I spend a lot of time studying at the café. The peaceful atmosphere and delicious drinks help me focus.</p>
            </div>
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="<?php echo URL; ?>html/img/testimonial-3.jpg" alt="">
                    <div class="ml-3">
                        <h4>Camila</h4>
                        <i>Designer</i>
                    </div>
                </div>
                <p class="m-0">There's no better place to meet up with friends than the local café. There's always a lively atmosphere and the coffee quality is unmatched.</p>
            </div>
            <div class="testimonial-item">
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid" src="<?php echo URL; ?>html/img/testimonial-4.jpg" alt="">
                    <div class="ml-3">
                        <h4>Henry</h4>
                        <i>Programmer</i>
                    </div>
                </div>
                <p class="m-0">The local café is my favorite place to start the day! They always serve fresh and delicious coffee, and the cozy atmosphere is perfect for relaxing or working.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
    <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>Medellin, Colombia</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+57 3145332988</p>
            <p class="m-0"><i class="fa fa-envelope mr-2"></i>coffeclass@gmail.com</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
            <p>Follow us on our social media</p>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://x.com/?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/?locale=es_LA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://co.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
            <div>
                <h6 class="text-white text-uppercase">Monday - Friday</h6>
                <p>8:00 AM - 8:00 PM</p>
                <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                <p>2:00 PM - 8:00 PM</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">News</h4>
            <p>New locations coming soon in different areas of Medellin</p>
            <div class="w-100">

            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights
            Reserved.</a></p>
        <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML
                Codex</a></p>
    </div>
</div>
<!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>