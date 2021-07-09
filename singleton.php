<?php
class Singleton
{
	private static $_instance;
	
	private function __construct(){
		
	}
	
	private function __clone() {
		
	}
	
	private function __wakeup() {
		
	}
	
	public static function getInstance(): Singleton{
	
		if (self::$_instance === null) {
			self::$_instance = new self;
		}
		
		return self::$_instance;
	}
	
	public function doAction(){
		echo "I`m the instance of Singleton and I`m alone!";
	}
}

Singleton::getInstance->doAction();
?>