<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

   if($connection) {
    echo "connected";
   }else {
    die('error');
   }

   $query = "SELECT * FROM users";

   $results = mysqli_query($connection, $query);

   if (!$results) {
       die('Query failed');
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>

<div class="container">
    <div class="col-sm-6">
       <?php  
       
       while($row = mysqli_fetch_assoc($results)) {
        ?>
        <pre>
        <?php
        print_r($row);
       
       ?>
       </pre>
       <?php
       }
       ?>
    </div>
</div>
 
</body>
</html>