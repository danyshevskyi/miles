<?php

use Miles\App\Controllers\MilesController;
use Miles\App\Controllers\CrudController;
use Miles\App\Controllers\CostsController;
// use Analytics\App\Models\Count;
use Auth\App\Models\Auth;


Flight::route('GET /miles', function() {	
	
	// Analytics
	// $objCount = new Count('miles', 'all');
	// 	$objCount->count();
	
	$MilesController = new MilesController();
		$MilesController->main();
});


Flight::route('POST /miles', function() {
	
	// Analytics
	// $objCount = new Count('miles', 'all');
	// 	$objCount->count();

	$AuthController = new MilesController();
		$CrudController = new CrudController();
			$CostsController = new CostsController();

	$key = Flight::request()->data['key'];
		$keyJSON = Flight::request()->data->keyJSON;

	$Auth = new Auth();
		$check = $Auth->check();
			
	if($check)
	// if(true)
	{
		if ($key == 'mileages')
		{
			$year = Flight::request()->data['year'];
				$month = Flight::request()->data['month'];		
					$CrudController->tabMileages($year, $month);
		}
		elseif ($key == 'calc')
		{
			$year = Flight::request()->data['year'];
				$month = Flight::request()->data['month'];		
					$CrudController->tabCalc($year, $month);
		}
		elseif ($key == 'addMileage_check')
		{
			$CrudController->addMileageCheck();
		}
		elseif ($key == 'addMileage_add')
		{
			$CrudController->addMileageAdd();
		}
		elseif ($key == 'addMileage_upd')
		{
			$CrudController->addMileageUpd();
		}
		elseif ($key == 'del')
		{
			$CrudController->addMileageDel();
		}
		elseif ($key == 'upd')
		{
			$CrudController->addMileageUpd();
		}
		elseif($key == 'fuelAdd' OR $key == 'deprAdd')
		{
			$CrudController->calcAdd();
		}
		elseif($key == 'fuelUpd' OR $key == 'deprUpd')
		{
			$CrudController->calcUpd();	
		}
		elseif($key == 'fuelDel' OR $key == 'deprDel')
		{
			$CrudController->calcDel();
		}
		elseif ($key == 'costs')
		{
			$year = Flight::request()->data['year'];
				$month = Flight::request()->data['month'];
					$filter = Flight::request()->data['filter'];		
						$CostsController->tabCosts($year, $month, $filter);
		}
		elseif($keyJSON == 'selCosts')
		{
			$CostsController->costsSel();
		}
		elseif($key == 'costsAdd')
		{
			$CostsController->costsAdd();
		}
		elseif($key == 'costsDel')
		{
			$CostsController->costsDel();
		}
		elseif($key == 'costsUpd')
		{
			$CostsController->costsUpd();
		}
	}

	// if ($key == 'userauth')
	// {
	// 	$AuthController->auth();	
	// }
	// elseif ($key == 'end') 	
	// {
	// 	$AuthController->end();
	// } 
	// elseif ($key == 'reg')
	// {
	// 	$AuthController->reg();
	// }
	// elseif ($key == 'checkUserReg')
	// {
	// 	$AuthController->checkUserReg();
	// }
	// elseif ($key == 'checkUserAuth')
	// {
	// 	$AuthController->checkUserAuth();
	// }

});