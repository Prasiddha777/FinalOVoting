<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vote.css">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <title>VoteNow</title>
</head>

<body>
    <div>
        <input type="checkbox" id="sidebar-toggle">
    </div>
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span>
                <span>E-Voting System</span>
            </h3>
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="candidates.php">
                        <span class="ti-face-smile"></span>
                        <span>Candidates</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="vote.php">
                        <span class="ti-agenda"></span>
                        <span>Vote Now</span>
                    </a>
                </li> -->
            </ul>
        </div>

    </div>
    <div class="main-content">

        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>

            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <a href="logout.php" title="Logout" class="text-danger"><span class="ti-power-off"></span></a>
                <div></div>
            </div>
        </header>
        <div id="main">
            <div class="aa">
                <h1>CANDIDATES</h1>
                <form method="post" action="">
                    <input type="submit" name="aaa" value="Kyle">
                    <input type="submit" name="bbb" value="Suntali">
                    <input type="submit" name="ccc" value="Dhurmus">
                    <input type="submit" name="ddd" value="Robert">

                </form>

            </div>
</body>

</html>
<?php
include 'connection.php';
if (isset($_COOKIE['shakil'])) {
    echo "<p class='color'>You Cannot Vote Again....</p>";
} else {
    if (isset($_POST['aaa'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE lekhnath SET Kyle= Kyle+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR KYLE WASHINGTON";
        }
    }
    if (isset($_POST['bbb'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE lekhnath SET Suntali= Suntali+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR SUNTALI BUDA";
        }
    }
    if (isset($_POST['ccc'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE lekhnath SET Dhurmus= Dhurmus+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR DHURMUS NEPAL";
        }
    }
    if (isset($_POST['ddd'])) {
        $name = 'shakil';
        $value = 'true';
        setcookie($name, $value, time() + (1 * 365 * 24 * 60 * 60));
        $Jason = mysqli_query($con, "UPDATE lekhnath SET Robert= Robert+1 ");
        if ($Jason) {
            echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR ROBERT KHADKA";
        }
    }
}
?>
<?php
include 'details.php';
?>
</div>