<?php
	class Attack{
		public $attackName;
		public $attackDamage;

		public function __construct($attackName, $attackDamage){
			$this->attackName = $attackName;
			$this->attackDamage = $attackDamage;
		}

		public function getAttackName(){
			return $this->attackName;
		}

		public function getAttackDamage(){
			return $this->attackDamage;
		}

	}