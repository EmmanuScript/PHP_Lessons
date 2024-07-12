<?php

    //For Loop
    $numArray = [1,2,3,4,5];

    //foreach($numArray as num){
        // echo 'num'
    // }

    $ninjas = ['shaun', 'ryu', 'yoshi'];

    for ($i = 0; $i < count($ninjas); $i++) {
        echo $ninjas[$i]. '<br />';
     };


     foreach ($ninjas as $ninja) {
        echo $ninja.'<br />';
     }


     $blogs = [
        ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes' => 30],
        ['title'=>'mario kart cheats', 'author'=> 'toad', 'content'=>'lorem', 'likes' => 25],
        ['title'=>'xelda hidden cheats', 'author'=>  'link', 'content'=> 'lorem', 'likes' => 50]
     ];


     foreach ($blogs as $blog) {
        echo 'this is the blog title '. $blog['title'].' and the likes it got '.$blog['likes'];
        echo '<br />';
     };


     //While loop
     $i = 0;

     while($i < count($blogs)){
        echo 'This is a while loop ';
        echo $blogs[$i]['title'].'<br />';
        $i++;
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
        <?php foreach($blogs as $blog){ ?>

            <h3><?php echo $blog['title']; ?></h3>
            <p>Coming Soon: <?php echo $blog['author']; ?></p>
            <?php } ?>
    </ul>
</body>
</html>