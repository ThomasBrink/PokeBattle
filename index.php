<?php
	require 'Pokemon.php';

	require 'Pikachu.php';

	require 'Charmeleon.php';

	$geleRat = new Pikachu("geleRat", "lighting", "60", "60");

	$rodeRat = new Charmeleon("rodeRat", "fire", "120", "120");

	print_r('<pre>'. $geleRat . '</pre>');

	print_r('<pre>'. $rodeRat . '</pre>');

	$geleRat->displayName();

	$rodeRat->displayName();

