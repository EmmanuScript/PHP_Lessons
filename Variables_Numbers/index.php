<?php


    define('NAME', 'Yoshi'); //this is used to created constants

    $stringOne = 'my email is ';
    $stringTwo = 'olajumszy@gamil.com';

    $age = 8;
    $name = "youshi";
    $pi = 3.147;

    // $name = "Maria"

    echo $stringOne.$stringTwo.' and i am 3';

    echo "Hey my name is $name"; // This is called variable interpolation

    echo "ninja is shouting \"whaaa\""; //or
    
    echo 'ninja is screeming "whaaaa $name"'; //this is a way to escape strings

    echo $name[0];

    echo strlen($name);

    echo strtoupper($name);

    echo str_replace('y', 'w', $name);

    // order of operation in php (B I D M A S)
    // not that for all of the increment and decrement (i.e ++ +=) php is similar to javascript

    echo floor($pi);
    echo ceil($pi);

    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP file</title>
</head>
<body>
    <h1>USER PROFILE PAGE</h1>
    <p> <?php echo NAME; ?>  </p>
    <p> <?php echo $age; ?>  </p>
</body>
</html>