<?php
namespace car;
use file\Foo;
class Car{
	public $b=1;
	public function move(){
		$a = new Foo;
		$a->move();
	}
	static public function A(){
		self::$a;
	}
}

$a = 1;
$a=(string)$a;
var_dump(is_integer($a));
echo "ffff{$a}ddds";