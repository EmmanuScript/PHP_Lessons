<?php 
// file system - part 2

// $file = 'quotes.txt';

//opening a file for reading
// $handle = fopen($file, 'a+');


//read the file
// echo fread($handle, filesize($file));

// echo fread($handle, 112);

// echo fgets($handle);

// echo fgets($handle);

// echo fgetc($handle);

//writing to a file
// fwrite($handle, "\nEverything popular is wrong");


// fclose($handle);

// unlink($file);


//defining and using classes

class User {

    private $email;
    private $name;

    public function __construct($name, $email){
        $this->email = $email;
        $this->name = $name;
    }

    public function login(){
        echo $this->name.'the user logged in';
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return 'name has been updated';
        }else{
            return 'not a valid name';
        }
    }
}

// $userOne = new User();

// $userOne->login();

// echo $userOne->name;

$userTwo = new User('emman', 'emman@gmail.com');
// echo $userTwo->name;
// echo $userTwo->email;
echo $userTwo->setName('Lanumi');
echo $userTwo->getName();


?>