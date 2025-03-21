<?php 
    include('connections.php');
    $email = $password = $emailErr = $passwordErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($_POST['email']){
            $email = trim($_POST['email']);
        }
        if ($_POST['password']){
            $password = trim($_POST['password']);
        }
        if ($email && $password){
            $query = mysqli_prepare($connections, "SELECT id, name, password FROM customer_accounts WHERE email = ?");
            mysqli_stmt_bind_param($query, 's', $email);
            mysqli_stmt_execute($query);
            mysqli_stmt_store_result($query);
            if (mysqli_stmt_num_rows($query)){
                $db_id = $db_name = $db_password = '';
                mysqli_stmt_bind_result($query, $db_id, $db_name, $db_password);
                mysqli_stmt_fetch($query);
                if (password_verify($password, $db_password)){
                    $_SESSION['name'] = $db_name;
                    $_SESSION['id'] = $db_id ;
                    header('Location: appointment.php');

                }
            } else{
                $emailErr = $passwordErr = "Account is not found.";
            }
        }
        else{
            if (!$email){
                $emailErr = 'Email is required.';
            }
            if (!$password){
                $passwordErr = 'Password is required.';
            }
        }
        
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta La Vista Log In</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    
</head>
<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <?php 
        include('header.php');
    ?>

    <section class="section" id="reservation">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>LOG IN&nbsp;</h6>
                            <h2>Welcome back! Log in to savor the Italian experience!</h2>
                        </div>
                        <p>Welcome to Pasta La Vista! Whether you're a returning pasta lover or a first-time visitor, sign in or create an account to enjoy exclusive benefits and special promos!</p>
						<div class="section-heading">
                            <h6>CONTACT US&nbsp;</h6><br>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action=<?php echo $_SERVER["PHP_SELF"] ?> method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Log In</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xl-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Address*" class= 'my-2' value=<?php echo $email; ?>>
                              <span class="pl-2 text-danger"><small><?php echo $emailErr; ?></small></span>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xl-12">
                              <fieldset>
                                <input name="password" type="password" id="password" placeholder="Password*" class= 'my-2' value=<?php echo $password; ?>>
                                <span class="pl-2 text-danger"><small><?php echo $passwordErr; ?></small></span>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
								<br>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name="submit" id="form-submit" class="main-button-icon">Sign In</button>
                              </fieldset>
                            </div>
						  </div>
							<div class="col-lg-12 text-center mt-2">
    <small>
        Don't have an account yet? <a href="register.php" style="color: #FF0000; text-decoration: none;">Register here!</a>
    </small>
</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
