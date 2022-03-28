<?php
	require 'Pokemon.php';

	require 'Pikachu.php';

	require 'Charmeleon.php';

	require 'Attack.php';

	require 'Resistance.php';

	require 'Weakness.php';

	$pikachu = new Pikachu("Pikachu", 60);

	$charmeleon = new Charmeleon("Charmeleon", 60);

	echo $charmeleon->getPopulation() . " pokemons alive <br>";
	
	do{
		$pikachu->Attack($charmeleon);

		if($charmeleon->getHealth() > 0){
			$charmeleon->Attack($pikachu);
		}
	}
	while(($charmeleon->getHealth() > 0) && ($pikachu->getHealth() > 0));

	echo "<br>" . $charmeleon->getPopulation() . " pokemons alive";