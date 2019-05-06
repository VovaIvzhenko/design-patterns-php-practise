<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 16:44
 */

namespace Creational\SimpleFactory;


/**
 * Class Car
 * @package Creational\SimpleFactory
 */
class Car
{
	/**
	 * @var string
	 */
	private $model;

	/**
	 * @var string
	 */
	private $brand;

	/**
	 * Car constructor.
	 * @param string $brand
	 * @param string $model
	 */
	public function __construct(string $brand, string $model)
	{
		$this->brand = $brand;
		$this->model = $model;
	}

	/**
	 * @return string
	 */
	public function drive()
	{
		return "Car brand: {$this->brand}. Car model: {$this->model}";
	}
}