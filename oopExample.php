<?php

    class Person {
        private $name;
		private $email;
		private static $ageLimit = 40;

		public function __construct($name, $email){
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__.' created<br>';
		}
    
        public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name.'<br>';
		}
    }

    $person1 = new Person('John Doe', 'jdoe@gmail.com');
    echo $person1->getName();

    // Tobe completed ...
   
?>