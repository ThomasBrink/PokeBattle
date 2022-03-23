<?php
	class Resistance{
		protected $resEnergy;
		protected $resValue;

		public function __construct($resEnergy, $resValue){
			$this->resEnergy = $resEnergy;
			$this->resValue = $resValue;
		}

		function getResEnergy(){
			return $this->resEnergy;
		}

		function getResValue(){
			return $this->resValue;
		}
	}