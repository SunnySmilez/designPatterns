<?php
namespace observer;
interface observer {
	public function update($temp, $humidity, $pressure);
}