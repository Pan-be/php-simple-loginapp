<?php

print_r($_GET);

const name="januszek";

?>

<?php 

$name="ciacho";
$value=99;
$duration=time() + 60*60*24*7;


setcookie($name,$value,$duration);

?>

<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="practice.php?name=<?php echo name; ?>">Click</a>

    <br><br>

    <?php 
    
    if(isset($_COOKIE)) {
        echo print_r($_COOKIE);
    }
    
    ?>

    <br>
    <br>

    <a href="practice2.php">second page</a>

    <br><br>

    <?php 
    
    if (isset($_SESSION)){

        echo $_SESSION['greeting']="Elo mordo.";

    }
    
    ?>

</body>
</html>