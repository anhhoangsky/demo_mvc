<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href = "config/style.css">
	<title> DEMO MVC </title>
</head>

<body class = "is-responsive">
	<div class = "footer-push">
		<nav class = "top-bar">
			<div class = "wrapper no-pad">
				<ul class = "navigation">
					<li><a href = "."> Home </a></li>
				<?php if(isset($_SESSION['username'])) {
					echo "<li><a href = '?controller=person&action=view'> Info </a></li>";
				echo "</ul>";
					echo "<div class = 'top-bar-right'>";
					echo "<a href = '?controller=user&action=logout'> Log out </a>";
					echo "</div>";
							} else {
				echo "</ul>";
					echo "<div class = 'top-bar-right'>";
					echo "<a href = '?controller=user&action=show_login_form'> Log in </a>";
					echo "</div>";
				} ?>
			</div>
		</nav>

		<main>
			<div class = "wrapper">
				<?php require_once 'routes.php'; ?>
			</div>
		</main>
	</div>
</body>
</html>
