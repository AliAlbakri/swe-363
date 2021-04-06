<?php


class meal
{
    private $meals = array(
        array(
            "id" => 1,
            "title" => "Best Sandwich",
            "price" => 23.9,
            "rating" => 4.5,
            "image" => "meal1.png",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!",
            "nutrition" => array(
                "serving_size" => "1 sandwich (57 g)",
                "serving_per_container" => 1,
                "facts" => array(
                    array("item" => "calories",
                        "amount_per_serving" => 200,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "calories_from_fat",
                        "amount_per_serving" => 70,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "total_fat",
                        "amount_per_serving" => 7,
                        "daily_value" => "11%",
                        "unit" => "g",
                    ),
                    array("item" => "saturated_fat",
                        "amount_per_serving" => 4,
                        "daily_value" => "20%",
                        "unit" => "g",
                    ),
                    array("item" => "cholestrol",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "sodium",
                        "amount_per_serving" => 220,
                        "daily_value" => "9%",
                        "unit" => "mg",
                    ),
                    array("item" => "total_carb",
                        "amount_per_serving" => 31,
                        "daily_value" => "10%",
                        "unit" => "g",
                    ),
                    array("item" => "vitamin_A",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "calcium",
                        "amount_per_serving" => 0,
                        "daily_value" => "2%",
                        "unit" => "mg",
                    ),
                )

            ),
            "reviews" => array(
                "reviewer_name" => "Omar",
                "city" => "Dhahran",
                "date" => "Feb 08, 2020",
                "rating" => 5,
                "image" => "meal1.png",
                "review" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                       Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!"
            ),
        ),
        array(
            "id" => 2,
            "title" => "Burger",
            "price" => 25.9,
            "rating" => 4.0,
            "image" => "meal2.png",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!",
            "nutrition" => array(
                "serving_size" => "1 sandwich (357 g)",
                "serving_per_container" => 1,
                "facts" => array(
                    array("item" => "calories",
                        "amount_per_serving" => 200,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "calories_from_fat",
                        "amount_per_serving" => 70,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "total_fat",
                        "amount_per_serving" => 7,
                        "daily_value" => "11%",
                        "unit" => "g",
                    ),
                    array("item" => "saturated_fat",
                        "amount_per_serving" => 4,
                        "daily_value" => "20%",
                        "unit" => "g",
                    ),
                    array("item" => "cholestrol",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "sodium",
                        "amount_per_serving" => 220,
                        "daily_value" => "9%",
                        "unit" => "mg",
                    ),
                    array("item" => "total_carb",
                        "amount_per_serving" => 31,
                        "daily_value" => "10%",
                        "unit" => "g",
                    ),
                    array("item" => "vitamin_A",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "calcium",
                        "amount_per_serving" => 0,
                        "daily_value" => "2%",
                        "unit" => "mg",
                    ),
                )
            ),
            "reviews" => array(
                "reviewer_name" => "Abdullah",
                "city" => "Khobar",
                "date" => "Jan 08, 2020",
                "rating" => 5,
                "image" => "man-eating-burger.png",
                "review" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                       Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!"
            ),
        ),
        array(
            "id" => 3,
            "title" => "Burger Meal",
            "price" => 27.5,
            "rating" => 4.7,
            "image" => "meal3.png",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!",
            "nutrition" => array(
                "serving_size" => "1 Sandwich (257 g)",
                "serving_per_container" => 3,
                "facts" => array(
                    array("item" => "calories",
                        "amount_per_serving" => 200,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "calories_from_fat",
                        "amount_per_serving" => 70,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "total_fat",
                        "amount_per_serving" => 7,
                        "daily_value" => "11%",
                        "unit" => "g",
                    ),
                    array("item" => "saturated_fat",
                        "amount_per_serving" => 4,
                        "daily_value" => "20%",
                        "unit" => "g",
                    ),
                    array("item" => "cholestrol",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "sodium",
                        "amount_per_serving" => 220,
                        "daily_value" => "9%",
                        "unit" => "mg",
                    ),
                    array("item" => "total_carb",
                        "amount_per_serving" => 31,
                        "daily_value" => "10%",
                        "unit" => "g",
                    ),
                    array("item" => "vitamin_A",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "calcium",
                        "amount_per_serving" => 0,
                        "daily_value" => "2%",
                        "unit" => "mg",
                    ),
                )

            ),
            "reviews" => array(
                "reviewer_name" => "Ali ",
                "city" => "Jubail",
                "date" => "Feb 08, 2021",
                "rating" => 5,
                "image" => "meal3.png",
                "review" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                       Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!"
            ),
        ),
        array(
            "id" => 4,
            "title" => "Best Deal Meal",
            "price" => 32.9,
            "rating" => 4.5,
            "image" => "meal4.png",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!",
            "nutrition" => array(
                "serving_size" => "1 dish (200 g)",
                "serving_per_container" => 4,
                "facts" => array(
                    array("item" => "calories",
                        "amount_per_serving" => 200,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "calories_from_fat",
                        "amount_per_serving" => 70,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "total_fat",
                        "amount_per_serving" => 7,
                        "daily_value" => "11%",
                        "unit" => "g",
                    ),
                    array("item" => "saturated_fat",
                        "amount_per_serving" => 4,
                        "daily_value" => "20%",
                        "unit" => "g",
                    ),
                    array("item" => "cholestrol",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "sodium",
                        "amount_per_serving" => 220,
                        "daily_value" => "9%",
                        "unit" => "mg",
                    ),
                    array("item" => "total_carb",
                        "amount_per_serving" => 31,
                        "daily_value" => "10%",
                        "unit" => "g",
                    ),
                    array("item" => "vitamin_A",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "calcium",
                        "amount_per_serving" => 0,
                        "daily_value" => "2%",
                        "unit" => "mg",
                    ),
                )

            ),
            "reviews" => array(
                "reviewer_name" => "Mohammad ",
                "city" => "Madinah",
                "date" => "Mar 26, 2020",
                "rating" => 4.5,
                "image" => "meal4.png",
                "review" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                       Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!"
            ),
        ),
        array(
            "id" => 5,
            "title" => "Chicken Burger",
            "price" => 19.4,
            "rating" => 4.8,
            "image" => "meal5.png",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!",
            "nutrition" => array(
                "serving_size" => "1 sandwich (257 g)",
                "serving_per_container" => 1,
                "facts" => array(
                    array("item" => "calories",
                        "amount_per_serving" => 200,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "calories_from_fat",
                        "amount_per_serving" => 70,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "total_fat",
                        "amount_per_serving" => 7,
                        "daily_value" => "11%",
                        "unit" => "g",
                    ),
                    array("item" => "saturated_fat",
                        "amount_per_serving" => 4,
                        "daily_value" => "20%",
                        "unit" => "g",
                    ),
                    array("item" => "cholestrol",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "sodium",
                        "amount_per_serving" => 220,
                        "daily_value" => "9%",
                        "unit" => "mg",
                    ),
                    array("item" => "total_carb",
                        "amount_per_serving" => 31,
                        "daily_value" => "10%",
                        "unit" => "g",
                    ),
                    array("item" => "vitamin_A",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "calcium",
                        "amount_per_serving" => 0,
                        "daily_value" => "2%",
                        "unit" => "mg",
                    ),
                )

            ),
            "reviews" => array(
                "reviewer_name" => "Khalid",
                "city" => "Riyadh",
                "date" => "Mar 08, 2021",
                "rating" => 5,
                "image" => "man-eating-burger.png",
                "review" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                       Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!"
            ),
        ),
        array(
            "id" => 6,
            "title" => "Pizza",
            "price" => 28.5,
            "rating" => 4.5,
            "image" => "meal6.png",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                         Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!",
            "nutrition" => array(
                "serving_size" => "1 slice (50 g)",
                "serving_per_container" => 12,
                "facts" => array(
                    array("item" => "calories",
                        "amount_per_serving" => 200,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "calories_from_fat",
                        "amount_per_serving" => 70,
                        "daily_value" => "",
                        "unit" => "cal",
                    ),
                    array("item" => "total_fat",
                        "amount_per_serving" => 7,
                        "daily_value" => "11%",
                        "unit" => "g",
                    ),
                    array("item" => "saturated_fat",
                        "amount_per_serving" => 4,
                        "daily_value" => "20%",
                        "unit" => "g",
                    ),
                    array("item" => "cholestrol",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "sodium",
                        "amount_per_serving" => 220,
                        "daily_value" => "9%",
                        "unit" => "mg",
                    ),
                    array("item" => "total_carb",
                        "amount_per_serving" => 31,
                        "daily_value" => "10%",
                        "unit" => "g",
                    ),
                    array("item" => "vitamin_A",
                        "amount_per_serving" => 0,
                        "daily_value" => "0%",
                        "unit" => "mg",
                    ),
                    array("item" => "calcium",
                        "amount_per_serving" => 0,
                        "daily_value" => "2%",
                        "unit" => "mg",
                    ),
                )

            ),
            "reviews" => array(
                "reviewer_name" => "Abu Sami",
                "city" => "Makkah",
                "date" => "Dec 28, 2020",
                "rating" => 5,
                "image" => "meal6.png",
                "review" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est.
                       Nam nesciunt ex earum inventore corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic, deleniti enim!"
            ),
        ),
    );

    function getAllMeals()
    {
        return $this->meals;
    }

    function getMealById($id){
        foreach ($this->meals as $meal) {
            if ($meal['id'] == $id) {
                return $meal;
            }
        }
        return null;
    }


}