<?php
	class Database {
		protected static $db = null;
		
		public static function connect($database, $uid, $pwd) {
			if(!empty(Database::$db)) return;
                           $database = 'epiz_22959637_school';
			
			$dsn = "mysql:host=sql300.epizy.com;dbname=$database";
			$uid = 'epiz_22959637';
$pwd = 'A123456789';
			try {
		   		Database::$db = new PDO($dsn, $uid, $pwd);
			} catch(PDOException $e){
		   		echo $e->getMessage();
			}
		}

		public function get($field) {
			if(isset($this->{$field}))
				return $this->{$field};
			return null;
		}
	}
?>
