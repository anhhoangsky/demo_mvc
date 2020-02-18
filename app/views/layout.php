<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title> DEMO MVC </title>
</head>

<body>
	<nav>
		<a href = "."> Home </a>
		<?php if(isset($_SESSION['username'])) {
			echo "<a href = '?controller=person&action=view'> Info </a>"; 	
			echo "<a href = '?controller=user&action=logout'> Log out </a>";
					} else {
			echo "<a href = '?controller=user&action=show_login_form'> Log in </a>";	
		} ?>
	</nav>
	<main>
		<?php require_once 'routes.php'; ?>
	</main>
</body>
</html>