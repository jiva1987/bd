<?php 

class A{
	private static $s_instance=null;
	private function __construct(){

	}
	private function __clone(){

	}
	private function __wakeup(){

	}


	static public function getInstance(){
		if(is_null(self::$s_instance)){
			self::$s_instance=new self();
		}
		return self::$s_instance;
	}
}

$a = A::getInstance();
var_dump($a);