<?php
$location = $_SESSION['location'];

$sql = "SELECT * FROM candidates WHERE location='$location'";
$query = mysqli_query($conn, $sql);

$candidates = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

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

    <div class="row">
        <?php for ($i = 0; $i < count($candidates); $i++) { ?>
            <div class="col-md-3">
                <div class="card">
                    <div style="padding: auto;">
                        <img src="img/1.png" width="150px; height=auto; padding-top:16px;">
                    </div>
                    <h4><?= $candidates[$i]['candidate name'] ?></h1>
                        <p class="title"><?= $candidates[$i]['party name'] ?></p>

                        <a href="vote.php?location=<?= $location ?>">
                            <p><button type="Submit">Vote Now</button></p>
                        </a>

                </div>
            </div>
        <?php } ?>
    </div>

</div>