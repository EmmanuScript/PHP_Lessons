<?php 
// file system
// $quotes = readfile('readme.txt');

// echo $quotes;

$file = 'readme.txt';

if(file_exists($file)){
    // read file
    echo readfile($file).'<br/>';

    //copy file
    copy($file, 'quotes.txt');

    //absolute path of the file
    echo realpath($file).'<br/>';

    //file size
    echo filesize($file).'<br/>';

    //rename file
    rename($file, 'test.txt');
}else{
    echo 'file does not exists';
}

//make directory
mkdir('quotes')

?>