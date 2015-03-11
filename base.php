<?php
namespace designPatterns;
#use designPatterns\testNamespace\second;
new base();
class base {
	public function __construct() {
		$path = $_GET['d'];
		include $path.'.php';
		$path = array_pop(explode('/', $path));
		//$p = new 'testNamespace\\'.$path;
		$p = new testNamespace\second;
		$p->test();
	}
}