<!-- create variables from all 4 data types -->
<?php
//create a variable string
$string = "this is a string";

//create a variable integer
$integer = 6;

//create a variable float
$float = 0.4;

//create a variable boolean
$boolean = true;

?>

<!-- create "I love PHP" as a single concatenated sentence-->
<h1>
    <?php 
    echo "I " . "love " . "PHP" . "!"; 
    ?>
</h1>

<!-- create an array with 4 peices of data -->
<h2>
    <?php 
    $phparray = [1, 2, 3, 4];
    ?>
</h2>

<!-- create a class named car -->
<p>
    <?php 
    class Car {
        //properties
        public $make;

        //set the make of the car
        function set_make($make) {
            $this->make = $make;
        }
        function get_make() {
            return $this->make;
        }
    }

    $kia = new Car();
    $chevy = new Car();
    $kia->set_make('Kia');
    $chevy->set_make('Chevy');


    echo "I have a " . $kia->get_make();
    echo "<br>";
    echo "I have a " . $chevy->get_make();
    ?>

