<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta La Vista Registration</title>
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
        include('connections.php');

        $name = $nameErr = $email = $emailErr = $password = $passwordErr = $retypepassword = $retypepasswordErr = "" ;

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["name"]){
                $name = trim($_POST["name"]);
            }else{
                $nameErr = "Name is required.";
            }
            if($_POST["email"]){
                $email = trim($_POST["email"]);
            }else{
                $emailErr = "Email is required.";
            }
            if($_POST["password"]){
                $password = trim($_POST["password"]);
            }else{
                $passwordErr = "Password is required.";
            }
            if($_POST["retypepassword"]){
                $retypepassword = trim($_POST["retypepassword"]);
            }else{
                $retypepasswordErr = "Password does not match.";
            }

            if($_POST["retypepassword"] != $_POST["password"]){
                $retypepasswordErr = $passwordErr = "Password does not match.";
            }

            if($name && $password && $email && ($password == $retypepassword)){
                $query = mysqli_prepare($connections, "SELECT password FROM customer_accounts WHERE email = ?");
                mysqli_stmt_bind_param($query, 's', $email);
                mysqli_stmt_execute($query);
                mysqli_stmt_store_result($query);
                if (mysqli_stmt_num_rows($query) > 0){
                    $emailErr = "Email is already taken.";
                }else{
                    $hashed_password = password_hash($retypepassword, PASSWORD_DEFAULT);
                    $insertQuery = mysqli_prepare($connections, "INSERT INTO customer_accounts (name, email, password) VALUES (?,?,?)");
                    mysqli_stmt_bind_param($insertQuery, 'sss', $name, $email, $hashed_password);
                    mysqli_stmt_execute($insertQuery);
                    $name = $nameErr = $email = $emailErr = $password = $passwordErr = $retypepassword = $retypepasswordErr = "" ;
                    echo "
                        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                        <script>
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your information has been saved 🎉',
                            icon: 'success',
                            timer: 3000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.href = 'menu.php';
                        });
                        </script>";
                }
            }
        }


    ?>

    <section class="section" id="reservation">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" method= "POST" action= "register.php">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Sign Up</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xl-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Name*" class="my-2" value = <?php echo htmlspecialchars($name); ?>>
                                <span class="pl-2 text-danger"><small><?php echo $nameErr; ?></small></span>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xl-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Address*" class="my-2" value = <?php echo $email; ?>>
                              <span class="pl-2 text-danger"><small><?php echo $emailErr; ?></small></span>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xl-12">
                              <fieldset>
                                <input name="password" type="password" id="password" placeholder="Password*" class="my-2" value = <?php echo $password; ?>>
                                <span class="pl-2 text-danger"><small><?php echo $passwordErr; ?></small></span>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xl-12">
                              <fieldset>
                                <input name="retypepassword" type="password" id="retypepassword" placeholder="Retype Password*" class="my-2" value = <?php echo $retypepassword; ?>>
                                <span class="pl-2 text-danger"><small><?php echo $passwordErr; ?></small></span>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
								<br>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name="submit" id="form-submit" class="main-button-icon">Register</button>
                              </fieldset>
                            </div>
						  </div>
							<div class="col-lg-12 text-center mt-2">
    <small>
        Already a member? <a href="login.php" style="color: #FF0000; text-decoration: none;">Log In here!</a>
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
