<?php
//namespace strategyPattern;
abstract class duck {
	public $flyBehavior;
	public $quackBehavior;
	public abstract function display();

	public function performFly() {
		//在这里php是不能实例化接口的，所以只能在子类中去实现具体类的实例化
		$this->flyBehavior->fly();
	}

	public function performQuack() {
		$this->quackBehavior->quack();
	}

	public function swin() {
		echo 'duck float';
	}
}