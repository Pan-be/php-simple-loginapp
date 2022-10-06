<?php include "db.php";

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
    }


}

function deleteRows() {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error());
    }


}