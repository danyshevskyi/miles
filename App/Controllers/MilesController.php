<?php 

namespace Miles\App\Controllers;

use Miles\App\Models\CreateTables;
use Auth\App\Models\Auth;


class MilesController {

public $project = 'miles';

public function main() {

		// $objModelAuth = new Auth();
		// 	$check = $objModelAuth->check();
		
			// if($check)
			if(false)
			{
				// Check tables exist
				if($_SESSION['user'][$this->project] == 0)
				{
					$createTables = new CreateTables();
						$createTables->createTab();
				}
					$this->view('content_auth.php', ['email' => $_SESSION['user']['email']]);
			}
			else
			{	
				$this->view('content_notauth.php', []);
			}
}

public function view($template, $data) {
	$loader = new \Twig\Loader\FilesystemLoader('../App/Views');	
		$twig = new \Twig\Environment($loader);
			echo $twig->render($template, $data);
}

}
