<?php
	require_once 'Pessoa.php';
	
	class Professor extends Pessoa{
		private $siape;
		
		public function setSiape($sia){
			$this->siape = $sia;
		}
		
		public function getSiape(){
			return $this->siape;
		}
	}
?>