<?php
class performQuack extends duck {
	public function __construct() {
		$this->quackBehavior = new quack();
		$this->flyBehavior = new flyWithWings();
	}

	public function perform() {
		$this->quackBehavior->quack();
		$this->flyBehavior->fly();
	}

	public function display() {

	}
}