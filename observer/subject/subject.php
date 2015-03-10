<?php
namespace subject;
use observer\observer;

interface subject {
	public function registerObserver(observer $observer);
	public function removerObserver(observer $observer);
	public function notifyObserver();
}