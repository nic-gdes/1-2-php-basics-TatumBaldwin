<!--Variables 1. create variables from all 4 data types -->
<?php

    //create a variable string
    $string = "this is a string";

    //create a variable integer
    $integer = 20;

    //create a variable float
    $float = 0.4;

    //create a variable boolean
    $boolean = true;

?>


<!--Variables 2. create "I love PHP" as a single concatenated sentence-->
<h1>
    <?php 
        echo "I " . "love " . "PHP" . "!"; 
    ?>
</h1>


<!--Variables 3. create an array with 4 peices of data -->
<h2>
    <?php 
        $phparray = [1, 2, 3, 4];
    ?>
</h2>


<!--Variables 4. create a class named car -->
    <?php 
    class Car {

        //properties
        public $make;
        public $model;
        
        //set the make of the car
        function set_make($make) {
            $this->make = $make;
        }
        function get_make() {
            return $this->make;
        }

        //set the model of the car
        function set_model($model) {
            $this->model = $model;
        }
        function get_model() {
            return $this->model;
        }

        //set year of the car
        function set_year($year) {
            $this->year = $year;
        }
        function get_year() {
            return $this->year;
        }
    }

    // Variables 5. make new cars
    $myCar = new Car();
 

    // connect the make
    $myCar->set_make('Kia');


    // connect the model
    $myCar->set_model('Sportage');


    //connect the year
    $myCar->set_year('2017');


    // 6. post make, model and year of my car
    // echo "I have a" {{year}} {{make}} {{model}}"  ---- I did not use this method because it was not working;
    echo "I have a " . $myCar->get_year() . " " . $myCar->get_make() . " " . $myCar->get_model();
    ?>


<!-- Conditionals 1. create an if statement to test the integer -->
<?php
echo "<br>";
if ($integer >= 10) {
    echo "The number is more than 10 :)";
} else {
    echo "The number is less than 10 :(";
};

?>

<!-- Loops 1.  create a loop using the array -->
<?php
echo "<br>";
for ($i = 0; $i < count($phparray); $i++) {
  echo $i;
  foreach($phparray as $item) {
    echo $i;
  }
}



?>