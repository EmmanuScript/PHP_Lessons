<?php
session_start();

$name = $_SESSION['name'];

//we can also overide what was saved in the form by redefining the session start

// $_SESSION['name'] = 'yohsi

if($_SERVER['QUERY_STRING'] == 'noname'){
    // unset($_SESSION['name']);
    session_unset();
}

 //Null Coaslescing operatror
    $name = $_SESSION['name'] ?? 'Guest';

    //get cookie
    $gender = $_COOKIE['gender'] ?? 'unknown';

?>


<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Emmanuel Pizza</title>
    <style>
        .brand{
            background-color: #cbb09c !important;
        }

        .brand-text{
            color: #cbb09c !important;
        }

        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .pizza{
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">Emmanuel Pizza</a>
            <ul class="right hide-on-small-and-down" id="nav-mobile">
                <li class="grey-text">Hello <?php echo htmlspecialchars($name) ?></li>

                <li class="grey-text">(<?php echo htmlspecialchars($gender) ?>)</li>

                <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
            </ul>
        </div>
    </nav>
    
