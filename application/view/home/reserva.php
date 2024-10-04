<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Coffee Shop HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?php echo URL; ?>html/img/reserva.png" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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
                    <a href="<?php echo URL; ?>home/index" class="nav-item nav-link active">Hogar</a>
                    <a href="<?php echo URL; ?>home/about" class="nav-item nav-link">Acerca de</a>
                    <a href="<?php echo URL; ?>home/service" class="nav-item nav-link">Servicio</a>
                    <a href="<?php echo URL; ?>home/menu" class="nav-item nav-link">Menú</a>
                    <a href="<?php echo URL; ?>home/reserva" class="nav-item nav-link">Reserva</a>
                    <a href="<?php echo URL; ?>usuarioController/login" class="nav-item nav-link active">Acceso</a>
                    <a href="<?php echo URL; ?>home/contact" class="nav-item nav-link">Contacto</a>
                </div>
            </div>

    </div>
    </div>
    </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Reservation</h1>
            <div class="d-inline-flex mb-lg-5">
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- BUTTON WHATSAPP -->
    <div class="div-what" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
        <a href="https://wa.me/3145332988" target="_blank" style="text-decoration: none;">
            <button id="btn-what" class="boton-flotante" style="background-color: #25d366; color: #fff; border: none; width: 60px; height: 60px; border-radius: 50%; font-size: 24px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                <i class="fab fa-whatsapp" style="color: #fff;"></i>
            </button>
        </a>
        <div style="text-align: center; margin-top: 5px; color: black; font-weight: bold;"></div>
    </div>
    <!-- END BUTTON -->



   <!-- Reservation Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="reservation position-relative overlay-top overlay-bottom">
            <div class="row align-items-center">
                <div class="col-lg-6 my-5 my-lg-0">
                    <div class="p-5">
                        <div class="mb-4">
                            <h1 class="display-3 text-primary">30% OFF</h1>
                            <h1 class="text-white">For Online Reservation</h1>
                        </div>
                        <p class="text-white">In our coffee shop, we are pleased to offer our customers the opportunity to make reservations. Whether it's for a business meeting, a special celebration, or simply to ensure a comfortable spot during your visit, you can contact us to reserve a table. We'll ensure your experience is enjoyable and worry-free. We look forward to welcoming you!</p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Whenever you want</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>At your favorite spot</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Your comfort is our priority</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                        <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                        <form class="mb-5" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="Name" required="required" name="txtNameC" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email" required="required" name="txtEmail" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="date" name="fecha" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="time" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" name="hora" />
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;" name="txtcantidad">
                                    <option selected>Number of People</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;" name="txtsede">
                                    <option selected>Locations</option>
                                    <option value="Itagui">Itagui</option>
                                    <option value="Sabaneta">Sabaneta</option>
                                    <option value="Poblado">Poblado</option>
                                    <option value="Bello">Bello</option>
                                    <option value="Copacabana">Copacabana</option>
                                    <option value="Manrique">Manrique</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;" name="txtmesa">
                                    <option selected>Number of Tables</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>

                            <div>
                                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit" name="btnEnviar">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation End -->



    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">news</h4>
                <p>New headquarters coming soon in different areas of Medellin</p>
                <div class="w-100">

                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
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
    <link href="<?php echo URL; ?>css/sweetalert2.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo URL; ?>gen/vendors/jquery/dist/jquery.min.js"></script>

    <!-- sweetalert js -->
    <script src="<?php echo URL; ?>js/sweetalert2.min.js"></script>
    <script>
        const url = "<?php echo URL; ?>";
    </script>
    <script>
        $(document).ready(function() {
            <?php
            if (isset($_SESSION['alert']) != false && $_SESSION['alert'] != null) {
                echo $_SESSION['alert'];
                $_SESSION['alert'] = null;
            }
            ?>
        })
    </script>
</body>

</html>