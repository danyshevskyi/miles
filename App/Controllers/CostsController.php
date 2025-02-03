<?php

namespace Miles\App\Controllers;

use Miles\App\Models\CostsModel;


class CostsController {

public $costsModel;

public function __construct() {
	$this->costsModel = new CostsModel();
}

public function tabCosts($year, $month, $filter) {
	$data = $this->costsModel->readCosts($year, $month, $filter);
		$this->view('./mod_auth/tabCosts.php', ['data'=>$data]);
}

public function costsAdd() {
	$this->costsModel->costsAdd();
}

public function costsSel() {
	$this->costsModel->costsSel();
}

public function costsDel() {
	$this->costsModel->costsDel();
}

public function costsUpd() {
	$this->costsModel->costsUpd();
}

public function view($file, array $data) {	
	$loader = new \Twig\Loader\FilesystemLoader('../App/Views');	
		$twig = new \Twig\Environment($loader);
			echo $twig->render($file, $data);
}

}
