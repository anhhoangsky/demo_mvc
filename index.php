<?php
	require_once 'config/db.php';
	session_start();

	if (isset($_GET['controller'], $_GET['action'])){
		$controller = $_GET['controller'];
		$action = $_GET['action'];

		if (!isset($_SESSION['username'])){
			if ($controller != 'home' && $controller != 'user'){
				$controller = 'user';
				$action = 'show_login_form';
			}
		}
	} else {
		$controller = 'home';
		$action = 'hello';
	}

	require_once 'app/views/layout.php'; 
?>