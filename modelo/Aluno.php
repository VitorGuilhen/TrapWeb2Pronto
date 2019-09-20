<?php
	require_once 'Pessoa.php';
	
	class Aluno extends Pessoa{
		private $ra;
		
		public function setRa($ra){
			$this->ra = $ra;
		}
		
		public function getRa(){
			return $this->ra;
		}
	}
?>