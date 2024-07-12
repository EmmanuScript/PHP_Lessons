<?php
$score = 20;

//trrnary operator

echo $score > 40 ? 'score is hight' : 'shore is low';


//super globals

echo $_SERVER['SERVER_NAME']. '<br />';

echo $_SERVER['REQUEST_METHOD']. '<br />';
echo $_SERVER['SCRIPT_FILENAME']. '<br />';
echo $_SERVER['PHP_SELF']. '<br />';


//sessions: to carry over sessions
if(isset($_POST['submit'])){

    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    echo $_SESSION['name'];

    header('Location: index.php');


};





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>php tut</title>
</head>
<body>

<p><?php echo $score > 40 ? 'score is hight' : 'shore is low';
 ?></p>

 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
 </form>

 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
    
</body>
</html>