<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$form) {
	$form['kwota'] = array_key_exists('kwota', $_REQUEST) ? $_REQUEST ['kwota'] : null;
	$form['oproc'] = array_key_exists('oproc', $_REQUEST) ? $_REQUEST ['oproc'] : null;
	$form['lata'] = array_key_exists('lata', $_REQUEST) ? $_REQUEST ['lata'] : null;
}

function validate(&$form, &$messages) {
	if ( ! (isset($form['kwota']) && isset($form['oproc']) && isset($form['lata']))) {
		return false;
	}

	if ( $form['kwota'] == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $form['oproc'] == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	if ( $form['lata'] == "") {
		$messages [] = 'Nie podano okresu kredytu';
	}

	if (!empty( $messages )) return false; 
	
	if (! is_numeric( $form['kwota'] )) {
		$messages [] = 'Kwota nie jest liczbą';
	}
	if (! is_numeric( $form['oproc'] )) {
		$messages [] = 'Oprocentowanie nie jest liczbą';
	}	
	if (! is_numeric( $form['lata'] )) {
		$messages [] = 'Okres kredytu nie jest liczbą';
	}
	
	if(!empty($messages)) return false;

	if ($form['kwota'] <= 0) {
		$messages [] = "Kwota musi być większa od zera";
	}
	if ($form['oproc'] < 0) {
		$messages [] = "Oprocentowanie musi być większe lub równe zeru";
	}
	if ($form['lata'] <= 0) {
		$messages [] = "Okres kredytu musi być większy od zera";
	}
	
	return empty($messages);
}

function process(&$form, &$messages, &$result) {
	global $role;

	$form['kwota'] = round(floatval($form['kwota']), 2);
	$form['oproc'] = floatval($form['oproc']);
	$form['lata'] = intval($form['lata']);

	if($form['kwota'] > 10000) {
		if($role != 'admin') {
			$messages [] = 'Tylko administrator może obliczyć kredyt na ponad 10 000';
		}
	}
	if($form['oproc'] < 10) {
		if($role != 'admin') {
			$messages [] = 'Tylko administrator może obliczyć kredyt o oprocentowaniu mniejszym niż 10%';
		}
	}

	if(empty($messages)) {
		$result = ($form['kwota'] + $form['kwota'] * $form['oproc'] / 100 * $form['lata']) / ($form['lata'] * 12);
		$result = round($result, 2);
	}
}

$form = null;
$result = null;
$messages = array();

getParams($form, $messages);
if(validate($form, $messages)) {
	process($form, $messages, $result);
}

include 'calc_view.php';