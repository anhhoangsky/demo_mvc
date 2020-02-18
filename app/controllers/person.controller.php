<?php
	class Person{
		public static function view () {
			$list = ModelPerson::get_all();

			require_once 'app/views/person/view.php';
		}

		public static function view_one (){
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$person = ModelPerson::get($id);

				require_once 'app/views/person/change.php';
			} else {
				echo "Err";
				die();
			}
		}

		public static function update(){
			if (isset($_GET['id'])){
				$id = $_GET['id'];
				$name = $_GET['name'];
				$phone = $_GET['phone'];
				$mail = $_GET['mail'];

				$res = ModelPerson::update($id,$name,$phone,$mail);
				header('location: ?controller=person&action=view&succ=update&id='.$id.'&res='.$res.'');
			} else {
				echo "Err";
				die();
			}
		}

		public static function delete (){
			if (isset($_GET['id'])){
				$id = $_GET['id'];

				$res = ModelPerson::delete($id);
				header('location: ?controller=person&action=view&succ=delete&res='.$res.'');
			} else {
				echo "Err";
				die();
			}
		}

		public static function show_form_add (){
			require_once('app/views/person/add.php');
		}

		public static function insert(){
			if (isset($_GET['submit-insert'])) {
				$name = $_GET['name'];
				$phone = $_GET['phone'];
				$mail = $_GET['mail'];

				$res = ModelPerson::insert($name,$phone,$mail);
				header('location: ?controller=person&action=view&succ=add&res='.$res.'');
			}
		}
	}
?>