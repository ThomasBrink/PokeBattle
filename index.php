<?php
	require 'Pokemon.php';

	require 'Pikachu.php';

	require 'Charmeleon.php';

	require 'Attack.php';

	require 'Resistance.php';

	require 'Weakness.php';

	$pikachu = new Pikachu("Pikachu", 60);

	$charmeleon = new Charmeleon("Charmeleon", 60);

	//print_r('<pre>'. $geleRat . '</pre>');

	//print_r('<pre>'. $rodeRat . '</pre>');

	for($i = 0; $i<2; $i++){
		if($charmeleon->getStatus() == "fainted" || $pikachu->getStatus() == "fainted"){
			break;
		}
		else{
			$pikachu->Attack($charmeleon);

			if($charmeleon->getStatus() != "fainted"){
				$charmeleon->Attack($pikachu);
			}

			$i = 0;
		}
	}

