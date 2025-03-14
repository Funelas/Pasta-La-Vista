<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

 <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>
<body>
    
   <?php 
    include('header.php');
   ?>
    <section class="section section-img-bg" id="offers">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-md-5 text-center text-md-start section-heading">
                    <h6 class="text-success">Pasta-bilities Are Endless</h6>
                    <h2 class="fw-bold section-text">This Week's Special Meal Offers</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container d-flex justify-content-center my-3">
        <nav>
            <div class="nav nav-pills d-flex justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-link active m-3 rounded" id="nav-breakfast-tab" data-toggle = "pill" href="#breakfast" type="button" role="tab" aria-controls="breakfast" aria-selected="true">
                <img class= "pill-image"src="assets/custom-images/Breakfast.png" alt="">
                <div class="btn rounded pill-text">Breakfast</div>
                

                </a>

                <a class="nav-link m-3 rounded" id="nav-lunch-tab" data-toggle = "pill" href="#lunch" type="button" role="tab" aria-controls="lunch" aria-selected="false">
                    <img class= "pill-image"src="assets/custom-images/Lunch.png" alt="">
                    <div class="btn rounded pill-text">Lunch</div>
                </a>
                
                <a class="nav-link m-3 rounded" id="nav-dinner-tab" data-toggle = "pill" href="#dinner" type="button" role="tab" aria-controls="dinner" aria-selected="false">
                    <img class= "pill-image"src="assets/custom-images/Dinner.png" alt="">
                    <div class="btn rounded pill-text">Dinner</div>
                </a>


                <a class="nav-link m-3 rounded" id="nav-pastry-tab" data-toggle = "pill" href="#pastry" type="button" role="tab" aria-controls="pastry" aria-selected="false">
                    <img class= "pill-image"src="assets/custom-images/Pastry.png" alt="">
                    <div class="btn rounded pill-text">Pastry</div>
                </a>
            </div>
        </nav>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id= "breakfast" role="tabpanel" aria-labelledby="nav-breakfast-tab">
            
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-12 text-center section-heading">
                        <img src="assets/custom-images/Breakfast.png" alt="">
                        <h2 class="fw-bolder">
                            <div>Breakfast</div>
                        </h2>
                        <hr class="w-50 bg-success">
                    </div>
                </div>
            </div>
            <div class="container-lg">
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Breakfast Images/1.png" alt="Breakfast Carbonara" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Breakfast Carbonara</h3>
                                    <p class="text-muted fs-6">Creamy carbonara tossed with crispy pancetta and pecorino.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$18</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Breakfast Images/2.png" alt="Raviolo al Uovo" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Raviolo al Uovo</h3>
                                    <p class="text-muted fs-6">A large raviolo filled with ricotta and a runny egg yolk, topped with sage.
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$22</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Breakfast Images/3.png" alt="Tiramisu Pancake" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Tiramisu Pancake</h3>
                                    <p class="text-muted fs-6">Layers of espresso-soaked pancakes, mascarpone cream, and cocoa dusting.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$16</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Breakfast Images/4.png" alt="Caprese Avocado Toast" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Caprese Toast</h3>
                                    <p class="text-muted fs-6">Toasted ciabatta with avocado, cherry tomatoes, mozzarella, and balsamic drizzle.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$14</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Breakfast Images/5.png" alt="Lemon Ricotta Waffles" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Lemon Ricotta Waffles</h3>
                                    <p class="text-muted fs-6">Fluffy ricotta waffles with lemon zest, whipped cream, and honey drizzle.
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$15</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Breakfast Images/6.png" alt="Ricotta Pasta Bowl" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Ricotta Pasta Bowl</h3>
                                    <p class="text-muted fs-6">Spaghetti pasta with lemon zest, ricotta, and spinach.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$17</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="tab-pane fade" id= "lunch" role="tabpanel" aria-labelledby="nav-lunch-tab">
            
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-12 text-center section-heading">
                        <img src="assets/custom-images/Lunch.png" alt="">
                        <h2 class="fw-bolder">
                            <div>Lunch</div>
                        </h2>
                        <hr class="w-50 bg-success">
                    </div>
                </div>
            </div>
            
            <div class="container-lg">
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Lunch Images/1.jpg" alt="Cacio Pepe" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Cacio Pepe</h3>
                                    <p class="text-muted fs-6">Tonnarelli pasta tossed with pecorino and black pepper for a creamy, cheesy delight.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$24</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Lunch Images/2.jpg" alt="Pesto Fusilli" class = "image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Pesto Fusilli</h3>
                                    <p class="text-muted fs-6">Twisted fusilli coated in basil pesto, topped with fresh burrata and cherry tomatoes.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$20</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Lunch Images/3.jpg" alt="Lasagna Bolognese" class = "image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Lasagna Bolognese</h3>
                                    <p class="text-muted fs-6">Layers of slow-cooked meat sauce, béchamel, and pasta sheets baked to perfection.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$26</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Lunch Images/4.jpg" alt="Shrimp Tagliatelle" class = "image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Shrimp Tagliatelle</h3>
                                    <p class="text-muted fs-6">Buttered tagliatelle with garlic shrimp, white wine, and a hint of lemon.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$28</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Lunch Images/5.jpg" alt="Truffle Risotto" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Truffle Risotto</h3>
                                    <p class="text-muted fs-6">Creamy risotto-style orzo with truffle oil, wild mushrooms, and parmesan.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$30</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Lunch Images/6.jpg" alt="Caprese Salad" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Caprese Salad</h3>
                                    <p class="text-muted fs-6">Chilled orecchiette with fresh mozzarella, tomatoes, basil, and balsamic glaze.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$18</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        
        <div class="tab-pane fade" id= "dinner" role="tabpanel" aria-labelledby="nav-dinner-tab">
            
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-12 text-center section-heading">
                        <img src="assets/custom-images/Dinner.png" alt="">
                        <h2 class="fw-bolder">
                            <div>Dinner</div>
                        </h2>
                        <hr class="w-50 bg-success">
                    </div>
                </div>
            </div>
            
            <div class="container-lg">
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Dinner Images/1.jpg" alt="Veal Piccata" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Veal Piccata</h3>
                                    <p class="text-muted fs-6">Veal cutlets in a tangy, buttery sauce made with garlic, lemon, capers, and chicken stock.
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$28</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Dinner Images/2.jpg" alt="Braciole" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Braciole</h3>
                                    <p class="text-muted fs-6">Flank steak rolled with prosciutto, breadcrumbs, cheese, and pine nuts, simmered in tomato sauce.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$26</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Dinner Images/3.jpg" alt="Osso Buco" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Osso Buco</h3>
                                    <p class="text-muted fs-6">Milanese braised veal with tender meat, marrow-rich bones, and a zesty lemon-parsley sauce.
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$32</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Dinner Images/4.jpg" alt="Cacciatore" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Cacciatore</h3>
                                    <p class="text-muted fs-6">Chicken or rabbit stewed in a tomato-based sauce with herbs, olives, and wine.
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$22</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Dinner Images/5.jpg" alt="Polenta" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Polenta</h3>
                                    <p class="text-muted fs-6">Creamy or grilled cornmeal dish, often served with meats or vegetables.
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$14</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Dinner Images/6.jpg" alt="Pappardelle" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Pappardelle</h3>
                                    <p class="text-muted fs-6">Wide, flat pasta served with rich sauces like ragu or creamy mushrooms.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$18</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="tab-pane fade" id= "pastry" role="tabpanel" aria-labelledby="nav-pastry-tab">
            
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-12 text-center section-heading">
                        <img src="assets/custom-images/Pastry.png" alt="">
                        <h2 class="fw-bolder">
                            <div>Pastry</div>
                        </h2>
                        <hr class="w-50 bg-success">
                    </div>
                </div>
            </div>
            
            <div class="container-lg">
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Pastry Images/1.jpg" alt="Cannoli" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Cannoli</h3>
                                    <p class="text-muted fs-6">Crispy fried pastry tubes filled with sweet ricotta with chocolate chips.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$8</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Pastry Images/2.png" alt="Sfogliatella" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Sfogliatella</h3>
                                    <p class="text-muted fs-6">Flaky, layered pastry shaped like a seashell, filled with ricotta and citrus zest.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$9</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Pastry Images/3.jpeg" alt="Tiramisu" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Tiramisu</h3>
                                    <p class="text-muted fs-6">Coffee-soaked ladyfingers layered with mascarpone cream and dusted with cocoa powder.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$9</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Pastry Images/4.png" alt="Zeppole" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Zeppole</h3>
                                    <p class="text-muted fs-6">Light, deep-fried dough balls, topped with powdered sugar and paired with whipped cream.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$7</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-1 mb-lg-5">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Pastry Images/5.png" alt="Maritozzo" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Maritozzo</h3>
                                    <p class="text-muted fs-6">A soft, slightly sweet bun filled with whipped cream.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$6</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <img src="assets/custom-images/Pastry Images/6.png" alt="Torta Caprese" class="image-resize rounded-circle border-thick">
                            </div>
                            <div class="col-6 text-md-start">
                                <div>
                                    <h3 class="text-black">Torta Caprese</h3>
                                    <p class="text-muted fs-6">A dense, flourless rich and fudgy chocolate almond cake.</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex text-center justify-content-center align-items-center">
                                <div class="price-holder">
                                    <h3 class="rounded bg-success text-white d-flex align-items-center justify-content-center h-100 w-100 m-lg-1 m-2">$10</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
    
    
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