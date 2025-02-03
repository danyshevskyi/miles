<?php

namespace Miles\App\Models;

use \Repo\Db;
use DateTimeImmutable;
use Flight;


class CostsModel extends Db {

public $user_id;
public $table_db;
public $table_db_paid;
public $table_db_costs;
public $table_db_costs_list = 'miles_costs_list';


public function __construct() {
	if(isset($_SESSION['user']['id_user']))
	{
		$this->user_id = $_SESSION['user']['id_user'];
	} 
	else
	{
		$this->user_id = 0;
	}
		$this->table_db = "miles_".$this->user_id."_miles";
			$this->table_db_paid = "miles_".$this->user_id."_paid";
				$this->table_db_costs = "miles_".$this->user_id."_costs";
}

public function readCosts($year, $month, $filter) {
	$yearMonth_db = $year."-".$month."%";
	
	$db = $this->db();
		
		if ($filter == 'all')
		{
			$result_pdo = $db->query("SELECT * FROM $this->table_db_costs
				WHERE date_c LIKE '$yearMonth_db'
				AND (id_costs != 5)
				ORDER BY date_c ASC");
		}
		elseif ($filter == 'fuel')
		{
			$result_pdo = $db->query("SELECT * FROM $this->table_db_costs
				WHERE date_c LIKE '$yearMonth_db'
				AND (id_costs = 2)
				ORDER BY date_c ASC");
		}
		elseif ($filter == 'service')
		{
			$result_pdo = $db->query("SELECT * FROM $this->table_db_costs
				WHERE date_c LIKE '$yearMonth_db'
				AND (id_costs = 3)
				ORDER BY date_c ASC");
		}
		elseif ($filter == 'other')
		{
			$result_pdo = $db->query("SELECT * FROM $this->table_db_costs
				WHERE date_c LIKE '$yearMonth_db'
				AND (id_costs = 4)
				ORDER BY date_c ASC");
		}
		elseif ($filter == 'person')
		{
			$result_pdo = $db->query("SELECT * FROM $this->table_db_costs
				WHERE date_c LIKE '$yearMonth_db'
				AND (id_costs = 5)
				ORDER BY date_c ASC");
		}
		
			$data = 
			[
				'id'=>null,
				'key_costs'=>null,
				'price'=>null,
				'date_c'=>null,
				'comment'=>null,
				'sum_price'=>null
			];
		
		while($result_ua = $result_pdo->fetch()) {

			$id_costs = $result_ua['id_costs'];

			// Fix for change in id costs
			if($id_costs > 5) {
				$id_costs = 4;
			}

			$db_list = $this->db();

				$result_pdo_list = $db_list->query("SELECT * FROM $this->table_db_costs_list WHERE id = $id_costs");
					$result_ua_list = $result_pdo_list->fetch();
			
			$data['sum_price'] += $result_ua['price'];

			$data[] = ['id' => $result_ua['id'],
					   'key_costs' => $result_ua_list['costs'],
					   'price' => $result_ua['price'],
					   'date_c_ukr' => $this->dateFormat($result_ua['date_c'], 'd-m-Y'),
					   'date_c' => $result_ua['date_c'],
					   'comment' => $result_ua['comment']
					];		
	}
	return $data;
}

public function costsSel() {

	$db = $this->db();

	$query = $db->query("SELECT * FROM $this->table_db_costs_list");
		// echo "<option value='0'>Виберіть вид витрат ...</option>";
			while ($result = $query->fetch()) {
				echo "<option value=".$result['id'].">".$result['costs']."</option>";
			}
}

public function costsAdd() {
	$date = Flight::request()->data['date_c'];
		$costsSel = Flight::request()->data['costsSel'];
			$price = Flight::request()->data['price'];
				$comment = Flight::request()->data['comment_c'];						
			
			$db = $this->db();

			if(empty($price)) 
			{
				$db->prepare("INSERT INTO $this->table_db_costs (id_costs, price, date_c, comment) VALUE ($costsSel, 0, '$date', '$comment')")
				->execute();
			}
			else
			{
				$db->prepare("INSERT INTO $this->table_db_costs (id_costs, price, date_c, comment) VALUE ($costsSel, $price, '$date', '$comment')")
				->execute();
			}
}

public function costsDel() {

	$db = $this->db();

	$idCosts = Flight::request()->data['idCosts'];

	$db = $this->db();
		$db->prepare("DELETE FROM $this->table_db_costs WHERE id = '$idCosts'")->execute();		
}

public function costsUpd() {
		$idCosts = Flight::request()->data['idCosts'];
			$costsDate = Flight::request()->data['date_c'];
				$costsSel = Flight::request()->data['costsSel'];
					$price = Flight::request()->data['price'];
						$comment = Flight::request()->data['comment_c'];

	if($costsDate != null) {

		$db = $this->db();

		if(empty($price)) {
			$db->prepare("UPDATE $this->table_db_costs SET date_c = '$costsDate', id_costs = '$costsSel', price = 0, comment = '$comment' WHERE id = '$idCosts'")->execute();
		} else {
			$db->prepare("UPDATE $this->table_db_costs SET date_c = '$costsDate', id_costs = '$costsSel', price = '$price', comment = '$comment' WHERE id = '$idCosts'")->execute();
		}
	}
}	

public function dateFormat($date, $format) {
	$dateObj = new DateTimeImmutable($date);
		return $dateObj->format($format);
}

}
