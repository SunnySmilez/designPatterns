<?php
namespace displayElement;
use subject\subject;
use subject\weatherData;

class currentConditionsDisplay implements displayElement {
	private $objWeatherData;
	private $temperature;
	private $humidity;
	private $pressure;

	public function __construct(subject $subject) {
		$this->objWeatherData = $subject;
		$this->objWeatherData->registerObserver($this);
	}

	public function update($temperature, $humidity, $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->display();
	}

	public function display(){
		echo '温度：'.$this->temperature.'湿度'.$this->humidity.'压力'.$this->pressure;
	}
}