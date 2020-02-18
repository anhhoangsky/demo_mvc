<?php
	class MasterModel{
		public static function prepared_query($mysqli, $sql, $params, $types = ""){
		    $types = $types ?: str_repeat("s", count($params));
		    $stmt = $mysqli->prepare($sql);
		    $stmt->bind_param($types, ...$params);
		    $stmt->execute();
		    return $stmt;
		}

		public static function get_all_from($table){
			$conn = Database::connect();
			$sql = "SELECT * FROM $table WHERE 1 = 1";
			$stmt = $conn->prepare($sql);
			$result = $conn->query($sql);
			$list = $result->fetch_all(MYSQLI_ASSOC);
			return $list;
		}

		public static function get_one_from($table, $id){
			$conn = Database::connect();
			$sql = "SELECT * FROM $table WHERE id = ?";
			$res = self::prepared_query($conn,$sql,[$id])->get_result()->fetch_assoc();
			return $res;
		}

		public static function delete_from_where($table, $id){
			$conn = Database::connect();
			$sql = "DELETE FROM $table WHERE id = ?";
			$res = self::prepared_query($conn,$sql,[$id])->affected_rows;
			return $res;
		}

		public static function update_set_where($table, $id, $name, $phone, $mail){
			$conn = Database::connect();
			$sql = "UPDATE $table SET name = ?, phone = ?, mail = ? WHERE id = ?";
			$res = self::prepared_query($conn,$sql,[$name,$phone,$mail,$id])->affected_rows;
			return $res;
		}

		public static function insert_into($table, $name, $phone, $mail){
			$conn = Database::connect();
			$sql = "INSERT INTO $table (name, phone, mail) VALUE(?,?,?)";
			$res = self::prepared_query($conn,$sql,[$name,$phone,$mail])->affected_rows;
			return $res;
		}

		public static function check_name($name){
			$pattern = "/^[a-zA-Z ]+$/";
			return preg_match($pattern, $name);
		}

		public static function check_mail($mail){
			return filter_var($mail, FILTER_VALIDATE_EMAIL);
		}

		public static function check_phone($phone){
			$patter = "/^[0-9]{10,15}$/";
			return preg_match($patter,$phone);
		}
// if (!$result) {
// 	   trigger_error('Invalid query: ' . $conn->error);
// }
	}
?>
