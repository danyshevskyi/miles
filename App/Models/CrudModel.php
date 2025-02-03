<?php

namespace Miles\App\Models;

use \Repo\Db;
use DateTimeImmutable;
use Flight;


class CrudModel extends Db {

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

public function dayNum($date) {
	$dateLength = strlen($date);
		if($dateLength == 10) {
			$day = substr($date, -2);		
		}
		elseif($dateLength == 19) {
			// $day = substr($date, -11, 2);
			$day = substr($date, 0, -9);
		}
		if($day < 10) {
			$day = substr($day, -1);
		}		
	return $day;
}

public function dateFormat($date, $format) {
	$dateObj = new DateTimeImmutable($date);
		return $dateObj->format($format);
}

// Miles
public function readMileages($year, $month) {
	$yearMonth_db = $year."-".$month."%";

	$db = $this->db();

	$query = $db->query("SELECT * FROM $this->table_db WHERE date_m LIKE '$yearMonth_db' ORDER BY date_m ASC");

			$data = [
				'sum_my_m'=>null,
				'sum_counted_m'=>null,
				'sum_diff'=>null
			];

		while($result_ua = $query->fetch()) {
			$data['sum_my_m'] += $result_ua['my_m'];
				$data['sum_counted_m'] += $result_ua['counted_m'];
					$data['sum_diff'] += $result_ua['my_m'] - $result_ua['counted_m'];
						$diff = $result_ua['my_m'] - $result_ua['counted_m'];
		if(empty($result_ua['my_m']) OR empty($result_ua['counted_m'])) {
			$diff = null;		
		}
		if($diff >= 20) {
			$row_color = "table-danger";
		}
		elseif($diff >= 10 AND $diff < 20) {
			$row_color = "table-warning";
		}
		else {
			$row_color = null;
		}
			$data[] = [	'my_m' => $result_ua['my_m'],
						'counted_m' => $result_ua['counted_m'],
						'date_m' => $this->dayNum($result_ua['date_m']),
						'diff' => $diff,
						'comment' => $result_ua['comment_m'],
						'row_color' => $row_color ];		
	}
	return $data;
}

public function addMileageCheck() {
	$date_m_f = Flight::request()->data['date_m'];
		$db = $this->db();

		$query = $db->query("SELECT * FROM $this->table_db WHERE date_m = '$date_m_f';");
			$result = $query->fetch();
	if($result) {
		echo $result['my_m']."-".$result['counted_m']."-".$result['comment_m'];
	}
}

public function addMileageAdd() {
	$date = Flight::request()->data['date_m'];
		$my = Flight::request()->data['my_m'];
			$counted = Flight::request()->data['counted_m'];
				$comment = Flight::request()->data['comment_m'];

	$db = $this->db();

			if($my == "") 
			{
				$db->prepare("INSERT INTO $this->table_db (counted_m, date_m, comment_m) VALUE ($counted, '$date', '$comment')")
				->execute();
			}
			elseif($counted == "")
			{
				$db->prepare("INSERT INTO $this->table_db (my_m, date_m, comment_m) VALUE ($my, '$date', '$comment')")
				->execute();
			}
			else
			{
				$db->prepare("INSERT INTO $this->table_db (my_m, counted_m, date_m, comment_m) VALUE ($my, '$counted', '$date', '$comment')")
				->execute();
			}
}

public function addMileageUpd() {
		$date = Flight::request()->data['date_m'];
			$my = Flight::request()->data['my_m'];
				$counted = Flight::request()->data['counted_m'];
					$comment = Flight::request()->data['comment_m'];


	$db = $this->db();
	
	if(empty($my) AND empty($counted))
	{
		$db->prepare("UPDATE $this->table_db SET my_m = null, counted_m = null WHERE date_m = '$date'")->execute();
	}
	elseif(empty($my))
	{
		$db->prepare("UPDATE $this->table_db SET my_m = null, counted_m = $counted WHERE date_m = '$date'")->execute();
	}
	elseif(empty($counted))
	{
		$db->prepare("UPDATE $this->table_db SET my_m = $my, counted_m = null WHERE date_m = '$date'")->execute();
	}
	else
	{
		$db->prepare("UPDATE $this->table_db SET my_m = $my, counted_m = $counted WHERE date_m = '$date'")->execute();	
	}

		$db->prepare("UPDATE $this->table_db SET comment_m = '$comment' WHERE date_m = '$date'")->execute();
}	

public function addMileageDel() {
	$date = Flight::request()->data['date_m'];
		$db = $this->db();	
			$db->prepare("DELETE FROM $this->table_db WHERE date_m = '$date'")->execute();
}

// Calculation
public function readCalc($year, $month) {
	$db = $this->db();
	$yearMonth_db = $year."-".$month."%";
		
		$query = $db->query("SELECT * FROM $this->table_db_paid WHERE date_paid LIKE '$yearMonth_db'");	
			$result_paid = $query->fetch();

		$query_count = $db->query("SELECT SUM(counted_m) AS result FROM $this->table_db WHERE date_m LIKE '$yearMonth_db'");
			$result_count = $query_count->fetch();
		
		$query_costs_sum = $db->query("
			SELECT SUM(price) AS costs_sum
			FROM $this->table_db_costs
			WHERE date_c LIKE '$yearMonth_db'
			AND (id_costs > 1)
			AND (id_costs < 5)");
					$result_costs_sum = $query_costs_sum->fetch();
		
		$data['costs'] = $result_costs_sum['costs_sum'];
			
			if($result_paid){
				$data['paid'] = $result_paid['paid'];
				$data['depr'] = $result_paid['depr'];
			}
			if($result_count){
				$data['mileage_month'] = $result_count['result'];
			}
	return $data;
}

public function calcAdd() {
	$key = Flight::request()->data['key'];
		$year_paid = Flight::request()->data['year_paid'];
			$month_paid = Flight::request()->data['month_paid'];
				$paid = Flight::request()->data['paid'];
					$depr = Flight::request()->data['paid_depr'];
						$yearAndMonth = "'".$year_paid."-".$month_paid."'";
	$db = $this->db();
		$query = $db->query("SELECT * FROM $this->table_db_paid WHERE date_paid = $yearAndMonth;");
				$result = $query->fetch();
			if($key == 'fuelAdd') {
				if($result) {
					$this->calcUpd();
				} else {
					$db->query("INSERT INTO $this->table_db_paid (paid, date_paid) VALUE ($paid, $yearAndMonth)")
					->execute();
				}	
			} elseif($key == 'deprAdd') {	
				if($result) {
					$this->calcUpd();	
				} else {
					$db->query("INSERT INTO $this->table_db_paid (depr, date_paid) VALUE ($depr, $yearAndMonth)")
					->execute();	
				}
			}		
}

public function calcUpd() {
	$key = Flight::request()->data['key'];
		$year_paid = Flight::request()->data['year_paid'];
			$month_paid = Flight::request()->data['month_paid'];
				$paid = Flight::request()->data['paid'];
					$depr = Flight::request()->data['paid_depr'];
						$yearAndMonth = "'".$year_paid."-".$month_paid."'";
	$db = $this->db();
		if($key == 'fuelUpd' OR $key == 'fuelAdd') {
			$db->prepare("UPDATE $this->table_db_paid SET paid = $paid WHERE date_paid = $yearAndMonth;")
			->execute();
		} elseif($key == 'deprUpd' OR $key == 'deprAdd') {
			$db->prepare("UPDATE $this->table_db_paid SET depr = $depr WHERE date_paid = $yearAndMonth;")
			->execute();
		}
}

public function calcDel() {
	$key = Flight::request()->data['key'];
		$year_paid = Flight::request()->data['year_paid'];
			$month_paid = Flight::request()->data['month_paid'];
				$yearAndMonth = "'".$year_paid."-".$month_paid."'";
	$db = $this->db();
		if($key == 'fuelDel') {
			$db->prepare("UPDATE $this->table_db_paid SET paid = null WHERE date_paid = $yearAndMonth;")
			->execute();
		}
		elseif($key == 'deprDel') {
			$db->prepare("UPDATE $this->table_db_paid SET depr = null WHERE date_paid = $yearAndMonth;")
			->execute();
		}
}

}
