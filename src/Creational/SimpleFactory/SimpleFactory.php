<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 16:43
 */

namespace Creational\SimpleFactory;


/**
 * Class SimpleFactory
 * @package Creational\SimpleFactory
 */
class SimpleFactory
{
	/**
	 * @param string $brand
	 * @param string $model
	 * @return Car
	 */
	public function createCar(string $brand, string $model): Car
	{
		return new Car($brand, $model);
	}
}