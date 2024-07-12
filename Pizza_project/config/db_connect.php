<?php
$conn = mysqli_connect('localhost', 'emmanuel', '1234', 'emmanuel_pizza');

// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}
?>
