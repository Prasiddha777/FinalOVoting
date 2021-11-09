<?php

require('./db_conn.php');

if (isset($_POST['addUser'])) {

    $username = $_POST['username'];
    $fullname = $_POST['name'];
    $password = $_POST['password'];
    $location = $_POST['location'];
    $role = $_POST['role'];

    $password = md5($password);

    $sql = "INSERT INTO users VALUES(null, '$role', '$username', '$password', '$fullname', '$location')";
    $query = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn)) {
        header('location: ./home.php?mssg=success');
    } else {
        header('location: ./home.php?error=notInserted');
    }
} else {
    header('location: ./home.php');
}
