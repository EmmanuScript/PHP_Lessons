<?php

 function sayHello ($name) {
    echo "good morning ".$name.'<br /> <br />';
 }

 sayHello('mario');


 function formatProduct($product){
   // echo "{$product['name']} costs $ {$product['price']} to buy <br />";
   return "{$product['name']} costs $ {$product['price']} to buy <br />";

   //There is also include and require, which imports functions from other files
 }

 $formatted = formatProduct(['name'=> 'gold star', 'price'=> 20]);

 echo $formatted;
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
 
</body>
</html>