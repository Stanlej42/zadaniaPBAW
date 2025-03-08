<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota = array_key_exists('kwota', $_REQUEST) ? $_REQUEST ['kwota'] : '';
$oproc = array_key_exists('oproc', $_REQUEST) ? $_REQUEST ['oproc'] : '';
$lata = array_key_exists('lata', $_REQUEST) ? $_REQUEST ['lata'] : '';

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota) && isset($oproc) && isset($lata))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $oproc == "") {
	$messages [] = 'Nie podano oprocentowania';
}
if ( $lata == "") {
	$messages [] = 'Nie podano okresu kredytu';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Kwota nie jest liczbą';
	}
	if (! is_numeric( $oproc )) {
		$messages [] = 'Oprocentowanie nie jest liczbą';
	}	
	if (! is_numeric( $lata )) {
		$messages [] = 'Okres kredytu nie jest liczbą';
	}	

	if ($kwota <= 0) {
		$messages [] = "Kwota musi być większa od zera";
	}
	if ($oproc < 0) {
		$messages [] = "Oprocentowanie musi być większe lub równe zeru";
	}
	if ($lata <= 0) {
		$messages [] = "Okres kredytu musi być większy od zera";
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	$lata = intval($lata);
	$result = round($kwota * (1 + $oproc / 100) / $lata / 12, 2);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';