<?php

require('./db_conn.php');

if (isset($_POST['addCandidate'])) {

    $candidateName = $_POST['candidateName'];
    $partyName = $_POST['party'];
    $location = $_POST['location'];

    $sql = "INSERT INTO candidates VALUES(null, '$candidateName', '$partyName', '$location')";
    $query = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn)) {

        require "./connection.php";

        if ($location == 'Pokhara') {
            // die('here');
            $sql = "ALTER TABLE pokhara ADD $candidateName INT DEFAULT 0";
            // die($sql);
            $query = mysqli_query($con, $sql);
        } else {
            $sql = "ALTER TABLE lekhnath ADD $candidateName INT DEFAULT 0";
            $query = mysqli_query($con, $sql);
        }

        header('location: ./home.php?mssg=success');
    } else {
        header('location: ./home.php?error=notInserted');
    }
} else {
    header('location: ./home.php');
}
