<?php
	class ModelUser extends MasterModel{
		public static function authentication($username, $pwd){
			if ($username == 'admin' && $pwd == 'admin'){
				return 1;
			}
			return 0;
		}
	}
?>