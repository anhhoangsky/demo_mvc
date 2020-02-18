<?php
class Home{
	public static function hello(){
		echo "Hello home";
	} 

	public static function not_enough_permission(){
		echo "Hello you dont have permission";
		header('location: ?controller=user&action=show_login_form');
	}
}
?>