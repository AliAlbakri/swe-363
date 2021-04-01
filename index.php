<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
    <title>Happy Meals</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

<header>

    <nav class="navbar navbar-expand-lg   navbar-dark justify-content-spacebetween">
        <a class="navbar-brand " href="#">
            <img src="./Images/logo-White.svg" alt="">
        </a>

        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <i class="fas fa-bars"></i>
        </button>
        <div class="ml-auto collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav text-center nav-links">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Menu">Menu</a></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Gallery">Gallery</a></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Testimonials">Testimonials</a></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Contact">Contact Us</a></a>
                </li>

                <li class="red-link nav-item">
                    <a class="nav-link" href="#">Search <i class="fas fa-search"></i></a>
                </li>

                <li class="red-link nav-item">
                    <a class="nav-link" href="#">Profile <i class="fas fa-user"></i></a>
                </li>

                <li id="cart" data-toggle="modal" data-target="#cart-modal" class="red-link nav-item">
                    <a class="nav-link" href="#">Cart <i class="fas fa-shopping-cart"></i> <span id="cart-display">0 </span> </a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container landing">
        <p class="mb-5"></p>
        <h1 class="title mt-5">Party Time</h1>

        <div class="offer">
            <div class="shape">
                <div class="shape-text">
                    Buy any 2 burgers and get 1.5L Pepsi Free
                </div>
            </div>
        </div>

        <button id='order'>Order Now</button>
    </div>


</header>


<Section id="Menu">
    <h2 class="title">Want to Eat</h2>
    <p>Try out most delicious food and usually take minutes to deliver</p>


    <div class="menu-links row container mx-auto">
        <a class="col my-0 mx-1 p-1" href="">burger</a>
        <a class="col my-0 mx-1 p-1" href="">pizza</a>
        <a class="col my-0 mx-1 p-1" href="">fast food</a>
        <a class="col my-0 mx-1 p-1" href="">cupcake</a>
        <a class="col my-0 mx-1 p-1" href="">sandwich</a>
        <a class="col my-0 mx-1 p-1" href="">spaghetti</a>
    </div>


    <div class="image-background">


        <img class="w-100" src="Images/delivery.png" alt="delivery pizza guy" id="pizza-guy">


        <div>
            <div class="Tshape">
                <div class="Tshape-text">
                    <h2><strong>guarantee 30 minutes delivery</strong></h2>
                </div>
            </div>
            <p id="ttt"> If your are having a meeting working late at night and need an extra push</p>

        </div>

    </div>


</Section>


<div class="container">

    <Section id="Gallery">
        <h2 class="title">Our most popular recipes</h2>
        <p>Try out most delicious food and usually take minutes to deliver</p>


        <div class="row justify-content-center justify-content-lg-start">
            <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">

                <a href="detail.php">

                    <img src="Images/meal1.png" alt="meal1" class="card-img-top">
                </a>
                <div class="mealInfo">
                    <p class="weight200">⭐️ 4.5 rating</p>
                    <p>Best sandwich</p>
                    <p class="weight200">Some description</p>
                    <div class="meal-order">
                        <button name="Best sandwich" onclick="incrementCart(event)" id="increment" onClick="increment()">Add to cart</button>
                        <p class="weight200">39.9 SAR</p></div>
                </div>

            </div>

            <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">

                <a href="detail.php">

                    <img src="Images/meal2.png" alt="meal1" class="card-img-top">
                </a>
                <div class="mealInfo">
                    <p class="weight200">⭐️ 4.5 rating</p>
                    <p>Burger</p>
                    <p class="weight200">Some description</p>
                    <div class="meal-order">
                        <button name="Burger" onclick="incrementCart(event)" id="increment" onClick="increment()">Add to cart</button>
                        <p class="weight200">29.9 SAR</p></div>
                </div>
            </div>
            <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">

                <a href="detail.php">

                    <img src="Images/meal3.png" alt="meal1" class="card-img-top">
                </a>
                <div class="mealInfo">
                    <p class="weight200">⭐️ 4.5 rating</p>
                    <p>Burger Meal</p>
                    <p class="weight200">Some description</p>
                    <div class="meal-order">
                        <button name="Burger Meal" onclick="incrementCart(event)" id="increment" onClick="increment()">Add to cart</button>
                        <p class="weight200">27.9 SAR</p></div>
                </div>
            </div>
            <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">

                <a href="detail.php">

                    <img src="Images/meal4.png" alt="meal1" class="card-img-top">
                </a>
                <div class="mealInfo">
                    <p class="weight200">⭐️ 4.5 rating</p>
                    <p>Best Deal Meal</p>
                    <p class="weight200">Some description</p>
                    <div class="meal-order">
                        <button name="Best Deal Meal" onclick="incrementCart(event)" id="increment" >Add to cart</button>
                        <p class="weight200">25.9 SAR</p></div>
                </div>
            </div>
            <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">

                <a href="detail.php">

                    <img src="Images/meal5.png" alt="meal1" class="card-img-top">
                </a>
                <div class="mealInfo">
                    <p class="weight200">⭐️ 4.5 rating</p>
                    <p>Chicken Burger</p>
                    <p class="weight200">Some description</p>
                    <div class="meal-order">
                        <button name="Chicken Burger" onclick="incrementCart(event)" id="increment" onClick="increment()">Add to cart</button>
                        <p class="weight200">22.9 SAR</p></div>
                </div>
            </div>

            <div class="card mx-0 my-2 col-lg-3 col-md-4 col-11">

                <a href="detail.php">

                    <img src="Images/meal6.png" alt="meal1" class="card-img-top">
                </a>
                <div class="mealInfo">
                    <p class="weight200">⭐️ 4.5 rating</p>
                    <p>Pizza</p>
                    <p class="weight200">Some description</p>
                    <div class="meal-order">
                        <button name="Pizza" onclick="incrementCart(event)" id="increment" onClick="increment()">Add to cart</button>
                        <p class="weight200">45.9 SAR</p></div>
                </div>
            </div>

        </div>


    </Section>


    <Section id="Testimonials">
        <h2 class="title"> Clients Testimonials</h2>

        <div class="Testimonials-content">

            <div class="row justify-content-center align-items-center">

                <div id="carouselExampleIndicators" class="carousel slide col-lg-6 col-sm-11 " data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="Images/man-eating-burger.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Images/man-eating-burger.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="Images/man-eating-burger.png" alt="Second slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>


                </div>
                <p class="col-lg-6 col-sm-11" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nam aut deserunt minus-->
                    provident aliquid
                    maxime
                    et? Nisi incidunt laborum beatae debitis. Voluptatibus, qui recusandae assumenda a
                    minima vero
                    quasi.</p>

            </div>



        </div>

    </Section>

</div>


<Section id="Contact">


    <div class="info">

        <div class="info-item">
            phone:<strong>+966531381813</strong>
        </div>


        <div class="info-item">
            <img class="icon" src="Images/clock.svg" alt="clock">
            <p class="weight200">Sun-thr 11:00-23:00
                <br>
                fri-sat 12:00-23</p>
        </div>

        <div class="info-item">
            <img class="icon" src="Images/placeholder.svg" alt="placeholder">
            <p class="weight200">123 KFUPM Studemts Mall
                <br>
                Dhahran 34464
            </p>
        </div>

        <div class="social info-item">
            <a href="">facebook</a>
            <a href="">Twitter</a>
            <a href="">Instagram</a>
        </div>


    </div>


    <img src="Images/map.png" alt="">
</Section>


<footer class="mx-md-5 mx-2 row">

    <div class="about col-lg-4 col-sm-11">
        <img src="Images/logo-red.svg" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, aperiam possimus quia, in impedit
            doloribus quidem corporis animi aliquid ab delectus nam repudiandae sapiente iure asperiores eveniet
            repellat suscipit voluptates?</p>
    </div>

    <div class="useful-links col-lg-4 col-md-6 col-sm-12">
        <h3 class="title">USEFUL LINKS</h3>
        <ul class="footer-links">
            <li><a href="">About</a></li>
            <li><a href="#Menu">Menu</a></li>
            <li><a href="#Testimonials">Testimonials</a></li>
            <li><a href="#Contact">Contact Us</a></li>
        </ul>
    </div>

    <div class="feeds col-lg-4 col-md-6 col-sm-12">
        <h3 class="title">INSTAGRAM FEEDS</h3>

        <div class="grid-gallery">
            <a href="#"><img src="Images/meal1.png" alt=""></a>
            <a href="#"><img src="Images/meal2.png" alt=""></a>
            <a href="#"><img src="Images/meal3.png" alt=""></a>
            <a href="#"><img src="Images/meal4.png" alt=""></a>
            <a href="#"><img src="Images/meal5.png" alt=""></a>
            <a href="#"><img src="Images/meal6.png" alt=""></a>

        </div>
    </div>


</footer>


<!-- Modal -->
<div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="cart-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cart-modalLabel">Cart Items</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-5 ">
                <div class="row justify-content-between">
                    <p>item</p>
                    <p>price</p>
                </div>

                <div id="cart-items">

                </div>

                <div class="row justify-content-between">
                    <p>Total</p>
                    <p id="total-display-cart">0</p>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <button id="order-now" type="button" class="btn  btn-warning">Order now</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>


</body>
</html>