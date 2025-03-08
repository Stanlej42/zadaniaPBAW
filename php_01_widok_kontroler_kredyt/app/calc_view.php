<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="get">
	<label for="id_kwota">Kwota kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php isset($kwota) ? print($kwota) :""; ?>" />zł<br />
	<label for="id_oproc">Oprocentowanie: </label>
	<input id="id_oproc" type="text" name="oproc" value="<?php isset($oproc) ? print($oproc) :""; ?>" />%<br />
	<label for="id_lata">Okres: </label>
	<input id="id_lata" type="text" name="lata" value="<?php isset($lata) ? print($lata) :""; ?>" />lat<br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświetlenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata: '.$result.' zł'; ?>
</div>
<?php } ?>

</body>
</html>