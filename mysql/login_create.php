<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

   $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

   if($connection) {
    echo "connected";
   }else {
    die('error');
   }

   $query = 'INSERT INTO user(username, password) VALUES ('$username', '$password')';

   $results = mysqli_query($connection, $query);

   if (!$results) {
       die('Query failed');
   }

}
?>