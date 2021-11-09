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
                        <a href="candidates.html">View all</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-reload"></span>
                        <div>
                            <h5>Total Voters</h5>
                            <h4>19,500.00</h4>
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
                            <h4>Pokhara
                            </h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View all</a>
                    </div>
                </div>
            </div>


            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Live Count</h3>

                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Candidates</th>
                                        <th>Active Date</th>
                                        <th>End Date</th>
                                        <th>Photo</th>
                                        <th>Party</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jason Watson</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <!-- <div class="img-2"></div>
                                            <div class="img-3"></div> -->
                                        </td>
                                        <td>
                                            <span class="badge success">Congress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bidhya Sundari</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge warning">Communist</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pushpa Dahal</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Grija Khanal</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge warning">Processing</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kyle Washington</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Robert Khadka</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dhurmus Nepal</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Suntali Buda</td>
                                        <td>15 Aug, 2020</td>
                                        <td>22 Aug, 2020</td>
                                        <td class="td-team">
                                            <div class="img-1"></div>
                                            <div class="img-2"></div>
                                            <div class="img-3"></div>
                                        </td>
                                        <td>
                                            <span class="badge success">Success</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-id-badge"></span>
                                <div>
                                    <h5>06</h5>
                                    <small>Total Candidates</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-calendar"></span>
                                <div>
                                    <h5>601</h5>
                                    <small>Parliment Members</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-face-smile"></span>
                                <div>
                                    <h5>12</h5>
                                    <small>Profile update request</small>
                                </div>
                            </div>
                        </div>

                        <div class="bday-card">
                            <div class="bday-flex">
                                <div class="img/user-default.png"></div>
                                <div class="bday-info">
                                    <h5 class="card-title">
                                        <?= $_SESSION['name'] ?>
                                    </h5>
                                </div>


                                <div class="text-center">
                                    <a href="logout.php">
                                        <button>
                                            <span class="ti-comment"></span>
                                            Logout
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
            </section>

        </main>

    </div>
</body>

</html>