<?php
	class ModelPerson extends MasterModel{
		public static function get_all(){
			return parent::get_all_from("person");
		}

		public static function get($id){
			return parent::get_one_from("person", $id);
		}

		public static function delete($id){
			return parent::delete_from_where("person",$id);
		}

		public static function update($id, $name, $phone, $mail){
			return parent::update_set_where("person",$id, $name, $phone,$mail);
		}

		public static function insert($name,$phone,$mail){
			return parent::insert_into("person", $name, $phone, $mail);
		}
	}
?>