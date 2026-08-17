<?php
	class student{
		private $name;

		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}
	}

	$student1 = new student();
	$student1->setName("โชคร้าย");
	$student1Name = $student1->getName();
	echo $student1Name;




?>