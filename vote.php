<?php
session_start();

require './db_conn.php';

$location = $_GET['location'];

$sql = "SELECT * FROM candidates WHERE location='$location'";
$query = mysqli_query($conn, $sql);

$candidates = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vote.css">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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
                <span>E-Voting</span>
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
                <li>
                    <a href="location.php">
                        <span class="ti-folder"></span>
                        <span>Location</span>
                    </a>
                </li>
                <li>
                    <a href="Timesheet.php">
                        <span class="ti-time"></span>
                        <span>Timesheet</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-book"></span>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-settings"></span>
                        <span>Account</span>
                    </a>
                </li>
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
                <a href="logout.php" title="Logout" class="text-danger mx-2" style="text-decoration: none;"><span class="ti-power-off"></span></a>
                <?= $_SESSION['name'] ?>
            </div>
        </header>
        <div id="main" style="height: 50vh;">
            <div class="aa">
                <h1><?= $location ?> CANDIDATES</h1>
                <form method="post" action="./add_vote.php">
                    <input type="hidden" name="location" value=<?= $location ?>>
                    <?php for ($i = 0; $i < count($candidates); $i++) { ?>
                        <input type="hidden" name="candidateName" value=<?= $candidates[$i]['candidate name'] ?>>
                        <input type="submit" value=<?= $candidates[$i]['candidate name'] ?>>
                    <?php } ?>
                    <!-- <input type="submit" name="aaa" value="Jason">
                    <input type="submit" name="bbb" value="Bidhya">
                    <input type="submit" name="ccc" value="Pushpa">
                    <input type="submit" name="ddd" value="Girija"> -->

                </form>

            </div>
</body>

</html>
<?php
if ((isset($_GET['error']) && $_GET['error']) || isset($_COOKIE['shakil'])) {
    echo "<p class='color'>You Cannot Vote Again....</p>";
}
if (isset($_GET['success']) && $_GET['success']) {
    echo "<div class= 'message'>YOU HAVE SUCCESSFULLY CASTED A FOR $candidateName";
}
?>

</div>