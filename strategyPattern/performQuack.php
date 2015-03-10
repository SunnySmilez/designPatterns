<?php
class performQuack extends duck {
	public function __construct() {
		$this->quackBehavior = new quack();
		$this->flyBehavior = new flyWithWings();
	}

	public function perform() {
		echo 111;
		$this->quackBehavior->quack();
		$this->flyBehavior->fly();
	}

	public function display() {

	}
}

(new performQuack())->perform();
exit;