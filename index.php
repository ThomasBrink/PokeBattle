<?php
	require 'Pokemon.php';

	require 'Pikachu.php';

	require 'Charmeleon.php';

	require 'Attack.php';

	require 'Resistance.php';

	require 'Weakness.php';

	$geleRat = new Pikachu("geleRat", 60, 60);

	$rodeRat = new Charmeleon("rodeRat", 60, 60);

	//print_r('<pre>'. $geleRat . '</pre>');

	//print_r('<pre>'. $rodeRat . '</pre>');

	for($i = 0; $i<2; $i++){
		if($rodeRat->getStatus() == "fainted" || $geleRat->getStatus() == "fainted"){
			break;
		}
		else{
			$geleRat->Attack($rodeRat);

			if($rodeRat->getStatus() != "fainted"){
				$rodeRat->Attack($geleRat);
			}

			$i = 0;
		}
	}

