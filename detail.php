
<?php
include "./include/inc.header.php";
?>




<div class="container">

    <section id="meal-info">
        <?php
        $id = htmlspecialchars($_GET["id"]);

        $meal = $Meal->getMealById($id);

        ?>
        <div class="flex">
            <img class="img" src="<?php echo "Images/".$meal['image'] ?>" alt="delivery pizza guy">

            <div>
                <h1 class='title'><?php echo $meal['title'] ?></h1>
                <p id="price"><?php echo $meal['price'] ?> SAR</p>
                <p>⭐️ <?php echo $meal['rating'] ?>rating</p>
                <p><?php echo $meal['description'] ?></p>
                <div class="flex ">
                    <div class="quantity-buttons">
                        <button onclick="decrementQuantity()">-</button>
                        <button id="quantity-display">1</button>
                        <button onclick="incrementQuantity()">+</button>
                    </div>
                    <!-- <input onclick="addQuantityToCart()"   value="add to cart"> -->
                    <form action="php/cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $meal['id'] ?>">

                                <input type="submit" id="increment" class="yellow-button" onClick="increment()" value = "add to cart" >
                                    <!-- Add to cart -->
                                </button>
                            </form>
                </div>
            </div>

        </div>


    <!-- <div class="container  align-items-start"></div> -->

        <ul class="nav nav-tabs d-flex justify-content-start ">
            <li class="active tab "><a data-toggle="tab" href="#desc"><h2 class="title   my-tabs">Description</h2></a></li>
            <li class="tab"> <a data-toggle="tab" href="#menu1"><h2 class="title  my-tabs">Reviews</h2></a></li>
          </ul>

    <!-- here -->


    <div class="tab-content ">
        <div id="desc" class="tab-pane active in  ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti, dolorum ipsum laboriosam
                    maiores quae rem vel voluptatum! Explicabo facere harum iste
                    neque optio quia ratione recusandae tenetur veniam? Voluptatem.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consectetur deserunt dolore,
                    eveniet
                    excepturi explicabo laboriosam perspiciatis sunt totam velit.
                </p>



                <section id="nutrition-facts ">
                    <h4>Nutrition Facts</h4>

                    <table>
                        <tr>
                            <td colspan="3"><strong>Supplement Facts</strong></td>

                        </tr>

                        <tr class="row-coloring">

                            <td colspan="3"><strong>Serving Size:</strong> 1 Cookie (57g)</td>

                        </tr>

                        <tr>
                            <td colspan="3"><strong>Serving Per Container:</strong> 12</td>
                        </tr>


                        <tr class="row-coloring">
                            <td></td>
                            <td><strong>Amount Per Serving</strong></td>
                            <td><strong>%Daily Value*</strong></td>
                        </tr>

                        <tr>
                            <td>Calories</td>
                            <td>200</td>
                            <td></td>
                        </tr>
                        <tr class="row-coloring">
                            <td>Calories from Fat</td>
                            <td>70</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Total Fat</td>
                            <td>7 g</td>
                            <td>11%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Saturated Fat</td>
                            <td>4 g</td>
                            <td>20%</td>
                        </tr>

                        <tr>
                            <td>Trans Fat</td>
                            <td>0</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Cholesterol</td>
                            <td>0 g</td>
                            <td>0%</td>
                        </tr>

                        <tr>
                            <td>Sodium</td>
                            <td>220 g</td>
                            <td>9%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Total Carbohydrate</td>
                            <td>31 g</td>
                            <td>10%</td>
                        </tr>

                        <tr>
                            <td>Dietary Fiber</td>
                            <td>5g</td>
                            <td>20%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Sugars</td>
                            <td>12 g</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Sugar Alcohol</td>
                            <td>0 g</td>
                            <td></td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Protein</td>
                            <td>8 g</td>
                            <td>8%</td>
                        </tr>

                        <tr>
                            <td>Vitamin A</td>
                            <td></td>
                            <td>0%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Vitamin C</td>
                            <td></td>
                            <td>0%</td>
                        </tr>

                        <tr>
                            <td>Calcium</td>
                            <td></td>
                            <td>2%</td>
                        </tr>

                        <tr class="row-coloring">
                            <td>Iron</td>
                            <td></td>
                            <td>10%</td>
                        </tr>

                        <tr>

                            <td colspan="3">* Percent Daily Values are based on a 2.000 calorie dieL Your daily values may be higher
                                or
                                lower depending on your calorie needs
                            </td>

                        </tr>

                    </table>

                </section>




            </div>
            <div id="menu1" class="tab-pane fade in">
            <!-- review -->

            <section id="review">

                <div class="row flex">

                        <div class="col-lg-6 col-md-12 align-self-center">
                            <img class="img" src="Images/man-eating-burger.png" alt="man-eating-burger">
                        </div>
                        <div class="col-lg-6 col-sm-12  align-self-center">
                            <h4><?php echo $meal['reviews']["reviewer_name"] ?></h4>
                            <h5><?php echo $meal['reviews']['city'] ?>-<?php echo $meal['reviews']["date"] ?> ⭐️⭐️⭐️⭐️⭐️</h5>
                            <p><?php echo $meal['description'] ?></p>
                        </div>

                </div>

                <button class="yellow-button" id="addRevBtn">Add your Review</button>

                <div id="formWrapper">
                    <form method="GET" action="detail.php" id="form" class="hide" >

                        <div>
                            <label for="file">Image</label>
                            <input type="file" id="file" name="myFile">
                        </div>

                        <div>
                            <label for="rate">Rate the Food</label>
                            <input type="range" id="rate" name="rate" min="0" max="5" value="3" list="tickmarks">
                        </div>

                        <div>
                            <datalist id="tickmarks">
                                <option value="1"></option>
                                <option value="2"></option>
                                <option value="3"></option>
                                <option value="4"></option>
                                <option value="5"></option>
                            </datalist>

                        </div>

                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="First and Last Name">
                        </div>

                        <div>
                            <label for="feedback">Review</label>
                            <h4 id="msgForEmptyForm" class="hide" >Type your review</h4>
                            <textarea maxlength="500" placeholder="Type your review here 500 character max" name="feedback" id="feedback" cols="30" rows="10" onkeypress="removeErrorMessage()"></textarea>
                            <div id="counter">0/500</div>
                        </div>

                            <div>
                             <input class="yellow-button" type="button" onclick="validateForm()" value="Submit">
                            </div>
                        </form>
                    </div>


                </section>

            </div>
        </div>
    <!-- </div> -->




    </section>






    </div>

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
            <li><a href="index.php#Menu">Menu</a></li>
            <li><a href="index.php#Testimonials">Testimonials</a></li>
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

