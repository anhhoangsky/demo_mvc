<?php
	class User{
		public static function show_login_form(){
			require_once 'app/views/user/login.php';
		}

		public static function authentication(){
			if (isset($_GET['submit-login'])){
				$username = $_GET['username'];
				$pwd = $_GET['pwd'];

				$res = ModelUser::authentication($username, $pwd);
				if ($res){
					$_SESSION['username'] = $username;
					header('location: .');
				} else {
					header('location: ?controller=user&action=show_login_form&fail=login');
				}
			}
		}

		public static function logout(){
			session_unset();
			session_destroy();
			header('location: .');
		}
	}
?>