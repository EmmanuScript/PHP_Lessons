<?php


    define('NAME', 'Yoshi'); //this is used to created constants


    // indexed array
    $peopleOne = ['yoshi', 'shaun', 'emma', 'steve'];

    $peopleTwo = array('chun-li', 'teni');

    $ages = [20, 30, 40, 50];
    // echo always expexts a string

    $ages[1] = 25; //changing a value

    $ages[] = 39; //adding a new element to arrayu

    //another way tp add value to the end of an array include
    array_push($ages, 70);

    // MERGING ARRAYS
    $peopleThree = array_merge($peopleOne, $peopleTwo);


    //associative arrays are another type of arrays
    $ninjasOne = ['shaun' => 'black', 'mario'=> 'orange', 'luigi' => 'brown'];

    echo $ninjasOne['mario'];


    $ninjasTwo = array('shaun' => 'black', 'mario'=> 'orange', 'luigi' => 'brown');

    $ninjasTwo['toad'] = 'pink' // adding to array
    //merging and replace can be done the same way indexed arrays are merged and replaced

    //multi dimensional arrays
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>USER PROFILE PAGE</h1>
    <p>this  explains indexed array <?php echo $peopleOne[1]; ?>  </p>
    <p>this  explains indexed array <?php echo $peopleTwo[1]; ?>  </p>
    <p>this  explains indexed array <?php echo print_r($ages); ?>  </p>
    <p>this  explains indexed array <?php echo print_r($peopleThree); ?>  </p>
    <p>this  explains associative array <?php echo print_r($ninjasTwo); ?>  </p>
</body>
</html>