<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="welcome.css">
</head>

<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
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
                <li>
                    <a href="location.php">
                        <span class="ti-folder"></span>
                        <span>Location</span>
                    </a>
                </li>
                <li>
                    <a href="home.php">
                        <span class="ti-time"></span>
                        <span>Timesheet</span>
                    </a>
                </li>
                <li>
                    <a href="home.php">
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
                <a href="logout.php" title="Logout" class="text-danger"><span class="ti-power-off"></span></a>
                <div></div>
            </div>
        </header>

        <main>

            <h2 class="dash-title">Overview</h2>

            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>About Candidates</h5>
                            <h4>08</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="candidates.php">View all</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-reload"></span>
                        <div>
                            <h5>Total Voters</h5>
                            <h4>24</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Location</h5>
                            <h4>Pokhara</h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="Pokhara.php">View all</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Registration</h5>
                        <h4>Register Voters</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">Register</a>
                </div>
            </div>
            <br>
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>View</h5>
                        <h4>View Votes</h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="">View all</a>
                </div>
            </div>
    </div>




    </main>

    </div>
</body>

</html>