<?php
include 'connection.php';

$location = $_POST['location'];
if (isset($_COOKIE['shakil'])) {
    header('location: ./vote.php?location=' . $location . '&error');
} else {
    if (isset($_POST['candidateName'])) {
        $candidateName = $_POST['candidateName'];

        $name = 'shakil';
        $value = 'true';
        $loc = strtolower($location);

        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $perviousVote = mysqli_fetch_all(
            mysqli_query(
                $con,
                "SELECT $candidateName FROM $loc"
            ),
            MYSQLI_ASSOC
        );
        $newVote = $perviousVote[0][$candidateName] + 1;
        $upvote = mysqli_query($con, "UPDATE $location SET $candidateName=$newVote");
        // if ($upvote) {
        //     echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR $candidateName";
        // }

        header('location: ./vote.php?location=' . $location . '&success');
    }
    if (isset($_POST['aaa'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE pokhara SET Jason= Jason+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR JASON WATSON";
        }
    }
    if (isset($_POST['bbb'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE pokhara SET Bidhya= Bidhya+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR BIDHYA SUNDAR";
        }
    }
    if (isset($_POST['ccc'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE pokhara SET Pushpa= Pushpa+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR PUSHPA DAHAL";
        }
    }
    if (isset($_POST['ddd'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE pokhara SET Girija= Girija+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR GIRIJA KHANAL";
        }
    }
}
