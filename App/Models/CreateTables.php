<?php

namespace Miles\App\Models;

use PDO;
use Repo\Db;

class CreateTables extends Db {

public $id_user;
public $project = 'miles';

public function __construct() {

	if(isset($_SESSION['user']['id_user'])) {
		$this->id_user = $_SESSION['user']['id_user'];
	}

}

public function createTab() {
			
	$db = $this->db();

	$nameTable = $this->project."_".$this->id_user."_miles";

		// Check if table exists
		if(!$this->table_exists($nameTable) == 1)
		{
			// Create table
			$db->prepare("
				CREATE TABLE $nameTable (
					key_m int(11) NOT NULL AUTO_INCREMENT,
					my_m int(11) DEFAULT NULL,
					counted_m int(11) DEFAULT NULL,
					date_m date DEFAULT NULL,
					comment_m varchar(255) DEFAULT NULL,
					PRIMARY KEY (key_m)
					)
				ENGINE = INNODB,
				AUTO_INCREMENT = 104,
				AVG_ROW_LENGTH = 3276,
				CHARACTER SET utf8mb4,
				COLLATE utf8mb4_unicode_ci;
			")->execute();
		};

	$nameTablePaid = $this->project."_".$this->id_user."_paid";

		// Check if table exists
		if(!$this->table_exists($nameTablePaid ) == 1)
		{
			// Create table
			$db->prepare("
				CREATE TABLE $nameTablePaid (
					key_paid int(11) NOT NULL AUTO_INCREMENT,
					paid int(11) DEFAULT NULL,
					depr int(11) DEFAULT NULL,
					date_paid varchar(25) DEFAULT NULL,
					PRIMARY KEY (key_paid)
					)
				ENGINE = INNODB,
				AUTO_INCREMENT = 84,
				AVG_ROW_LENGTH = 8192,
				CHARACTER SET utf8mb4,
				COLLATE utf8mb4_unicode_ci;
			")->execute();
		};

	$nameTableCosts = $this->project."_".$this->id_user."_costs";
	
		// Check if table exists
		if(!$this->table_exists($nameTableCosts) == 1)
		{
			// Create table
			$db->prepare("
				CREATE TABLE $nameTableCosts (
				id int(11) NOT NULL AUTO_INCREMENT,
				id_costs int(3) DEFAULT NULL,
				price int(11) DEFAULT NULL,
				date_c date DEFAULT NULL,
				comment varchar(255) DEFAULT NULL,
				PRIMARY KEY (id)
				)
				ENGINE = INNODB,
				AUTO_INCREMENT = 75,
				AVG_ROW_LENGTH = 8192,
				CHARACTER SET utf8mb4,
				COLLATE utf8mb4_unicode_ci;
			")->execute();
		};

	// Recorder table exist
		$db->prepare("
						UPDATE auth_users
						SET $this->project = 1
						WHERE id_user = $this->id_user
					")->execute();

		$_SESSION['user'][$this->project] = 1;

			return true;
}

public function db() {
	require '../../../config/config.php';
		$objPDO = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUserName, $dbUserPass);
			return $objPDO;
}

}
