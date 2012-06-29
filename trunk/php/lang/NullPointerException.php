<?php
	class NullPointerException extends RuntimeException  {
		private $mName;
		
		public function __construct($name) {
			$this -> nName =  $name;
		}

				
	}
?>
