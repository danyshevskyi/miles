<?php

namespace Miles\App\Controllers;

use Miles\App\Models\CrudModel;


class CrudController {

public $crudModel;

public function __construct() {
	$this->crudModel = new CrudModel();
}

public function tabMileages($year, $month) {
	$dataModel = $this->crudModel->readMileages($year, $month);
		$this->view('./mod_auth/tabMileages.php', ['data'=>$dataModel]);
}

public function tabCalc($year, $month) {
	$data = $this->crudModel->readCalc($year, $month);
		$this->view('./mod_auth/tabCalc.php', ['data'=>$data]);
}

public function addMileageCheck() {	
	$data = $this->crudModel->addMileageCheck();
}

public function addMileageAdd() {
	$this->crudModel->addMileageAdd();
}

public function addMileageUpd() {
	$this->crudModel->addMileageUpd();
}

public function addMileageDel() {
	$this->crudModel->addMileageDel();
}

public function calcAdd() {
	$this->crudModel->calcAdd();
}

public function calcUpd() {
	$this->crudModel->calcUpd();
}

public function calcDel() {
	$this->crudModel->calcDel();
}

public function view($file, array $data) {	
	$loader = new \Twig\Loader\FilesystemLoader('../App/Views');	
		$twig = new \Twig\Environment($loader);
			echo $twig->render($file, $data);
}

}
