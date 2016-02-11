<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $image;

        function __construct($make_model, $price, $miles, $image)
        {
            $this->make_model = $make_model;
            $this->price = $price;
            $this->miles = $miles;
            $this->image = $image;
        }

        function worthBuying($max_price)
        {
            return $this->price < ($max_price + 100);
        }

        function maxMileage($max_mileage)
        {
            return $this->miles < $max_mileage;
        }

        function setMake_Model($new_make_model)
        {
            $this->make_model = $new_make_model;
        }

        function getMake_Model()
        {
            return $this->make_model;
        }

        function setPrice($car_price)
        {
            $this->price = $car_price;
        }

        function getPrice()
        {
            return $this->price;
        }

        function setMiles($car_miles)
        {
            $this->miles = $car_miles;
        }

        function getMiles()
        {
            return $this->miles;
        }

        function setImage($car_image)
        {
            $this->image = $car_image;
        }

        function getImage()
        {
            return $this->image;
        }
    }



    // $cars = array($porsche, $ford, $lexus, $mercedes);
    //
    // $cars_matching_search = array();
    // foreach ($cars as $car) {
    //     if ($car->worthBuying($_GET["price"]) && $car->maxMileage($_GET["mileage"])) {
    //         array_push($cars_matching_search, $car);
    //     }
    // }
?>
