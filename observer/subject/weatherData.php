<?php
namespace subject;
use observer\observer;

class weatherData implements  subject {
	private $temperature;
	private $humidity;
	private $pressure;
	static private $arrObserver;
	public function registerObserver(observer $observer) {
		if (!in_array($observer, self::$arrObserver)) {
			self::$arrObserver[] = $observer;
		} else {
			exit('您已经时观察者了');
		}
	}

	public function removerObserver(observer $observer) {
		if (in_array($observer, self::$arrObserver)) {
			foreach (self::$arrObserver as $k=>&$v) {
				if ($v == $observer) {
					unset(self::$arrObserver[$k]);
				}
			}
		} else {
			exit('您暂时还不时观察者，不可移除观察这身份');
		}
	}

	public function notifyObserver() {
		if (self::$arrObserver) {
			foreach(self::$arrObserver as $k=>$v) {
				$v->update($this->temperature, $this->humidity, $this->pressure);
			}
		} else {
			exit('暂时不存在观察者，不需要提醒');
		}
	}

	public function getTemperature() {}
	public function getHumidity() {}
	public function getPressure() {}

	public function measurementsChanged() {
		$this->notifyObserver();
	}

	public function setMeasurements($temperature, $humidity, $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
	}
}