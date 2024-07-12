<?php

    //conditional statements work the same in php as in JS
    $products = [
        ['name'=> 'shiny star', 'price'=> 20],
        ['name'=> 'lightning bolt','price'=> 20],
        ['name'=> 'imbarinbe','price'=> 40],
        ['name'=> 'buzz lightyear','price'=> 80],
        ['name'=> 'banana skin','price'=> 10],
        ['name'=> 'gold coin','price'=> 15],
    ];

    $filterNames = [];

    foreach ($products as $product) {
        if($product['price'] > 10 && $product['price'] < 60){
            echo $product['name'].'<br />';
            $filterNames[] = $product; 
        }else{
            echo 'this is false';
        };
    };



    foreach ($filterNames as $filter) {
        if($filter['name'] === 'gold coin'){
            break;
        };

        echo $filter['name'].'<br />';
    };
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP file</title>
</head>
<body>
    <h1>Blogs</h1>
    <ul> 
        <?php foreach($filterNames as $blog){ ?>
            <li>
                <h3><?php echo $blog['name']; ?></h3>
                <p>Coming Soon at: $<?php echo $blog['price']; ?></p>
            </li>
        <?php } ?>
    </ul>
</body>
</html>