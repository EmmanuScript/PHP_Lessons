<?php 
//multidimensional array

 $blogs = [
    ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes' => 30],
    ['title'=>'mario kart cheats', 'author'=> 'toad', 'content'=>'lorem', 'likes' => 25],
    ['title'=>'xelda hidden cheats', 'author'=>  'link', 'content'=> 'lorem', 'likes' => 50]
 ];

 echo $blogs[2]['author'];

 echo count($blogs);

 $blogs[] = ['title'=> 'castle pary', 'author'=> 'peach', 'content'=> 'lorem', 'likes'=> 23];

 //taking something off an array

 $pop = array_pop($blogs);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensional array</title>
</head>
<body>
    <p><?php echo print_r($blogs)?></p>
    <p><?php echo print_r($pop)?></p>
</body>
</html>