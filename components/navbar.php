<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- links -->
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.min.css" />
	<link rel="stylesheet" href="./assets/scss/main.css" />

	<!-- scripts -->
	<script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<title>Freelancer</title>
</head>

<body>
	<header class="py-2 shadow ">
		<nav class="navbar text-capitalize container fw-semibold ">
			<a class="navbar-brand fw-bolder fs-1 text-white " href="./"><i class="bi-briefcase"></i> freelancer</a>
			<ul class="navbar-nav flex-row gap-3">
				<li class="nav-item">
					<a class="nav-link fs-3 text-white " href="./dashboard.php">dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fs-3 text-white " href="./projects.php">projects</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fs-3 text-white " href="./freelancers.php">freelancers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link fs-3 text-white " href="./offers.php">offers</a>
				</li>
			</ul>
			<div>
				<a href="login.php" class="btn btn-lg btn-primary text-capitalize fw-semibold">
					login <i class="bi-person me-2"></i>
				</a>
			</div>
		</nav>
	</header>
	<main class="container ">