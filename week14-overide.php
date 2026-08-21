<?php
    class student {
        public $name = "ชื่อ";

		public function __construct(){
			echo "ฉันชื่อ " . $this->name;
		}

		public function showName(){
			echo $this->name;
		}
    }
    class stdCls extends student {
        public $stdClss;
		public $name = "ภูธาร";

		public function showName(){
			echo "ชื่อ " . $this->name;
		}
    }
    $stdClass = new stdCls();
	//$stdClass->showName();




?>