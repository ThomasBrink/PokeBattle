<?php
	class Weakness{
		protected $weakEnergy;
		protected $weakMulti;

		public function __construct($weakEnergy, $weakMulti){
			$this->weakEnergy = $weakEnergy;
			$this->weakMulti = $weakMulti;
		}

		function getWeakEnergy(){
			return $this->weakEnergy;
		}

		function getWeakMulti(){
			return $this->weakMulti;
		}
	}