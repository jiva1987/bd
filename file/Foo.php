<?php
namespace file;
class Foo{
	public function _construct(){
		echo __CLASS__;
	}
	public function move(){
		echo 'move File Foo';
	}
}



function foo(){
	echo 'file1';
}
