<?php
	require 'Pokemon.php';

	require 'Pikachu.php';

	require 'Charmeleon.php';

	require 'Attack.php';

	require 'Resistance.php';

	require 'Weakness.php';

	$geleRat = new Pikachu("geleRat", 60, 60);

	$rodeRat = new Charmeleon("rodeRat", 120, 120);

	print_r('<pre>'. $geleRat . '</pre>');

	print_r('<pre>'. $rodeRat . '</pre>');

	$geleRat->Attack($rodeRat);

	echo "<br>";
	for($i = 0; $i<4; $i++){
		$rodeRat->Attack($geleRat);
	}

	//$geleRat->displayName();

	//$rodeRat->displayName();

