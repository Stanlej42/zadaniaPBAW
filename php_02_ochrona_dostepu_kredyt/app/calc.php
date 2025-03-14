<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota, &$oproc, &$lata) {
	$kwota = array_key_exists('kwota', $_REQUEST) ? $_REQUEST ['kwota'] : null;
	$oproc = array_key_exists('oproc', $_REQUEST) ? $_REQUEST ['oproc'] : null;
	$lata = array_key_exists('lata', $_REQUEST) ? $_REQUEST ['lata'] : null;
}

function validate(&$kwota, &$oproc, &$lata, &$messages) {
	if ( ! (isset($kwota) && isset($oproc) && isset($lata))) {
		return false;
	}

	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $oproc == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	if ( $lata == "") {
		$messages [] = 'Nie podano okresu kredytu';
	}

	if (!empty( $messages )) return false; 
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą';
	}
	if (! is_numeric( $oproc )) {
		$messages [] = 'Oprocentowanie nie jest liczbą';
	}	
	if (! is_numeric( $lata )) {
		$messages [] = 'Okres kredytu nie jest liczbą';
	}
	
	if(!empty($messages)) return false;

	if ($kwota <= 0) {
		$messages [] = "Kwota musi być większa od zera";
	}
	if ($oproc < 0) {
		$messages [] = "Oprocentowanie musi być większe lub równe zeru";
	}
	if ($lata <= 0) {
		$messages [] = "Okres kredytu musi być większy od zera";
	}
	
	return empty($messages);
}

function process(&$kwota, &$oproc, &$lata, &$messages, &$result) {
	global $role;

	$kwota = round(floatval($kwota), 2);
	$oproc = floatval($oproc);
	$lata = intval($lata);

	if($kwota > 10000) {
		if($role != 'admin') {
			$messages [] = 'Tylko administrator może obliczyć kredyt na ponad 10 000';
		}
	}
	if($oproc < 10) {
		if($role != 'admin') {
			$messages [] = 'Tylko administrator może obliczyć kredyt o oprocentowaniu mniejszym niż 10%';
		}
	}

	if(empty($messages)) {
		$result = ($kwota + $kwota * $oproc / 100 * $lata) / ($lata * 12);
		$result = round($result, 2);
	}
}

$kwota = null;
$oproc = null;
$lata = null;
$result = null;
$messages = array();

getParams($kwota, $oproc, $lata, $messages);
if(validate($kwota, $oproc, $lata, $messages)) {
	process($kwota, $oproc, $lata, $messages, $result);
}

include 'calc_view.php';