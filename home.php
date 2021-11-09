<?php
session_start();
include "db_conn.php";

include "connection.php";

$sql1 = "SELECT * FROM lekhnath";
$lekhnathGroup = mysqli_fetch_array(mysqli_query($con, $sql1));

$sql2 = "SELECT * FROM pokhara";
$pokharaGroup = mysqli_fetch_array(mysqli_query($con, $sql2));


if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>HOME</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
		<link rel="stylesheet" href="Pokhara.css">
		<link rel="stylesheet" href="welcome.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>

	<body>
		<div class="row" style="min-height: 100vh">



			<!-- For Admin -->
			<!-- <div>
					<input type="checkbox" id="sidebar-toggle">
				</div> -->
			<div class="sidebar-wrapper col-2">
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
								<a href="index.php" style="text-decoration: none;">
									<span class="ti-home"></span>
									<span>Home</span>
								</a>
							</li>
							<li>
								<a href="candidates.php" style="text-decoration:none">
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
								<a href="location.php" style="text-decoration:none">
									<span class="ti-folder"></span>
									<span>Location</span>
								</a>
							</li>
							<li>
								<a href="home.php" style="text-decoration:none">
									<span class="ti-time"></span>
									<span>Timesheet</span>
								</a>
							</li>
							<li>
								<a href="home.php" style="text-decoration:none">
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
			</div>
			<?php if ($_SESSION['role'] == 'admin') { ?>

				<main class="col-10 p-5">


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
									<h5>Role</h5>
									<?= $_SESSION['role'] ?>
									<!-- <h4>25.00</h4> -->
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
									<?= $_SESSION['username'] ?>
								</div>
							</div>
							<div class="card-footer">
								<a href="">View all</a>
							</div>
						</div>
					</div>
					<br>

					<section class="recent">
						<div class="activity-grid row">
							<div class="card col-3 p-4 mr-1">
								<img src="img/admin-default.png" class="card-img-top" alt="admin image">
								<div class="card-body text-center clearfix">
									<h5 class="card-title float-start">
										<?= $_SESSION['name'] ?>
									</h5>
									<a href="logout.php" class="btn btn-dark float-end">Logout</a>
								</div>
							</div>

							<div class=" card col-5">
								<h3>Add New User</h3>
								<form action="./add_user.php" method="POST" class="form">
									<input class="form-control" type="text" placeholder="Username" name="username" required><br>
									<input class="form-control" type="text" placeholder="Full Name" name="name" required><br>
									<input class="form-control" type="password" placeholder="password" name="password" required><br>
									<select class="form-control" name="location" id="">
										<option value="Pokhara">Pokhara</option>
										<option value="Lekhnath">Lekhnath</option>
									</select><br>
									<select class="form-control" name="role" id="">
										<option value="user">User</option>
										<option value="admin">Admin</option>
									</select><br>
									<input type="submit" value="Add User" name="addUser" class="btn btn-primary float-end">
								</form>
							</div>

							<div class="summary col-4">
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
							</div>
					</section>

					<section class="recent">

					</section>

					<div class="p-3 row">
						<?php include 'php/members.php';
						if (mysqli_num_rows($res) > 0) { ?>

							<h1 class="display-4 fs-1 col-12">Members</h1>
							<table class="table col-9" style="width:50rem;">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Name</th>
										<th scope="col">User name</th>
										<th scope="col">Role</th>
										<th scope="col">Location</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									while ($rows = mysqli_fetch_assoc($res)) { ?>
										<tr>
											<th scope="row"><?= $i ?></th>
											<td><?= $rows['name'] ?></td>
											<td><?= $rows['username'] ?></td>
											<td><?= $rows['role'] ?></td>
											<td><?= $rows['location'] ?></td>
										</tr>
									<?php $i++;
									} ?>
								</tbody>
							</table>
						<?php } ?>
						<div class="col-3">
							<div class="card p-4">
								<h3>Add New Candidate</h3>
								<form action="./add_candidate.php" method="POST" class="form">
									<input class="form-control" type="text" placeholder="Candidate Name" name="candidateName" required><br>
									<input class="form-control" type="text" placeholder="Party Name" name="party" required><br>
									<select class="form-control" name="location" id="">
										<option value="Pokhara">Pokhara</option>
										<option value="Lekhnath">Lekhnath</option>
									</select><br>
									<input type="submit" value="Add Candidate" name="addCandidate" class="btn btn-primary float-end">
								</form>
							</div>
						</div>
					</div>
				</main>
			<?php } else { ?>
				<main class="col-10 px-4">

					<?php include("./user_page.php"); ?>
				</main>

			<?php } ?>
			</main>
		</div>
	</body>

	</html>
<?php } else {
	header("Location: index.php");
} ?>