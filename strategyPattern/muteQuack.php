<?php
//namespace strategyPattern;
class muteQuack implements quackBehavior {
	public function quack() {
		echo '不会叫的鸭子';
	}
}