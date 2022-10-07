<?php include "db.php";

function create () {

if (isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

   $query = "INSERT INTO users(username,password) VALUES ('$username', '$password')";

   $results = mysqli_query($connection, $query);

   if (!$results) {
       die('Query failed');
   } else {
    echo "Record created";
   }

}
       
}

function readRows () {
    global $connection;
    $query = "SELECT * FROM users";

    $results = mysqli_query($connection, $query);
 
    if (!$results) {
        die('Query failed');
    }
    while($row = mysqli_fetch_assoc($results)) {
        print_r($row);
           }
 
}

function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";

    $results = mysqli_query($connection, $query);

    if (!$results) {
       die('Query failed');
    }

    while ($row = mysqli_fetch_assoc($results)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
}
}

function updateTable() {
    if(isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username',";
    $query .= "password = '$password'";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    } else {
        echo "record updated";
    }
    }

}

function deleteRows() {
    if(isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    } else {
        echo 'record deleted';
    }
    }

}