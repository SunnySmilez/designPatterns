<?php
//namespace strategyPattern;
class flyNoWay implements flyBehavior {
	public function fly() {
		echo '不会飞的鸭子';
	}
}