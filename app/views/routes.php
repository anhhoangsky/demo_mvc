<?php
	require_once 'app/controllers/'.$controller.'.controller.php';
	require_once 'app/models/master.class.php';

	switch($controller){
		case 'home':
			$controller = new Home();
			break;
		case 'person':
			$controller = new Person();
			require_once 'app/models/person.class.php';
			break;
		case 'user':
			$controller = new User();
			require_once 'app/models/user.class.php';
			break;
	}

	$controller->{$action}();
?>