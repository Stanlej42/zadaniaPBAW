<?php
require_once 'init.php';

switch ($action) {
	default:
	case 'landing':
		include_once $conf->root_path.'/app/controllers/LandingCtrl.class.php';
		$ctrl = new app\controllers\LandingCtrl();
		$ctrl->generateView();
	break;
	case 'calcCompute':
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process();
	break;
	case 'formula':
		include_once $conf->root_path.'/app/controllers/FormulaCtrl.class.php';
		$ctrl = new app\controllers\FormulaCtrl();
		$ctrl->generateView();
	break;
}