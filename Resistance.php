<?php
	class Resistance{
		public $resEnergy;
		public $resValue;

		public function __construct($resEnergy, $resValue){
			$this->resEnergy = $resEnergy;
			$this->resValue = $resValue;
		}
	}