<?php 

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if(!$connection) {
 die("Database connection failed");
}

$query = "SELECT * FROM user";

$results = mysqli_query($connection, $query);
 
    if (!$results) {
        die('Query failed');
    }

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
<?php while($row = mysqli_fetch_assoc($results)) {
        print_r($row);
           } ?>

<?php 

// class Car {
//     var $wheel = 4;
//     function truck() {
//         $this->wheel = 8;
//     }
// }

// $bmw = new Car();
// $track = new Car();
// $track->truck();

// echo "bmw has $bmw->wheel";
// echo "track has $track->wheel";
// ?>


<?php 

Class Dog {
    var $eyeColor = 'blue';
    var $furColor = 'black';

    function ShowAll() {
        echo $this->eyeColor . ' eyed dog has ' . $this->furColor . ' fur';
    }
}

$borys = new Dog();

$borys->ShowAll();

?>

</body>
</html>