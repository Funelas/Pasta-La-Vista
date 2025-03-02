<?php 

    $submitted = !isset($_POST['submit']);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Pasta La Vista</title>
    <link rel="icon" sizes="32x32" href="assets/custom-images/favicon.png">
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <?php include('header.php'); ?>

    <!-- ***** Header Area End ***** -->    
    
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content d-flex flex-column">
                            <div class="catch-holder">
                                <h4 class="text-center pasta-text">Pasta La Vista</h4>
                                <h6 class="text-center catch-text">Get a TASTE of Italy</h6>
                            </div>
                            <div class="button-holder">
                                <div class="main-white-button scroll-to-section d-flex justify-content-center align-items-center text-center">
                                <a href="<?php echo $submitted ? 'register.html' : 'appointment.html'; ?>">Make A Reservation</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill img1">
                                <img src="assets/custom-images/gallery-1.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill img2">
                                <img src="assets/custom-images/gallery-2.jpeg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill img3">
                                <img src="assets/custom-images/gallery-3(edited).jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** Menu Area Starts ***** -->
    <section class="section mt-1" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of pasta, handcrafted with the finest ingredients!</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>$22</h6></div>
                            <div class='info'>
                              <h1 class='title'>Raviolo al Uovo</h1>
                              <p class='description'>A large raviolo filled with ricotta and a runny egg yolk, topped with sage.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>$28</h6></div>
                            <div class='info'>
                              <h1 class='title'>Veal Piccata</h1>
                              <p class='description'>Veal cutlets in a tangy, buttery sauce made with garlic, lemon, capers, and chicken stock.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>$32</h6></div>
                            <div class='info'>
                              <h1 class='title'>Osso Buco</h1>
                              <p class='description'>Milanese braised veal with tender meat, marrow-rich bones, and a zesty lemon-parsley sauce.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>$18</h6></div>
                            <div class='info'>
                              <h1 class='title'>Pappardelle</h1>
                              <p class='description'>Wide, flat pasta served with rich sauces like ragu or creamy mushrooms.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>$9</h6></div>
                            <div class='info'>
                              <h1 class='title'>Sfogliatella</h1>
                              <p class='description'>Flaky, layered pastry shaped like a seashell, filled with ricotta and citrus zest.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>$6</h6></div>
                            <div class='info'>
                              <h1 class='title'>Maritozzo</h1>
                              <p class='description'>A soft, slightly sweet bun filled with whipped cream.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>A Taste of Italy, Served Fresh at Your Table! </h2>
                        </div>
                        <p>At Pasta La Vista, we bring the heart of Italy to your table with fresh, handcrafted pasta and bold, authentic flavors. Every dish is made with the finest ingredients, combining tradition with a modern twist to create an unforgettable dining experience.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/custom-images/about1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/custom-images/about2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/custom-images/about3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" 
                                    src="https://www.youtube.com/embed/OY0vJAKNGeY" 
                                    frameborder="0" 
                                    allowfullscreen></iframe>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>The masters behind every delicious bite.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="assets/custom-images/chef1.jpg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Aaliyah Montgomery</h4>
                            <span>Pastry Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="assets/custom-images/chef2.jpg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>David Martin</h4>
                            <span>Pasta Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="assets/custom-images/chef3.jpg" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Yumi Tanaka</h4>
                            <span>Side Dish Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer id="con-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <ul class="mt-2 justify-content-start">
                                <li class="ml-1 text-white"><i class="fa fa-phone mr-2"></i>Phone Number: 09120220250</li>
                                <li class="ml-1 text-white"><i class="fa fa-envelope mr-2"></i>Email: pastalavistababy@e.com</li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><img class="pasta-logo" src="assets/custom-images/Pasta La Vista Logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Group 5
                        <br>Design: Credits to TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>