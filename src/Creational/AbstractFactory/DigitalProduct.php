<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 07.05.2019
 * Time: 11:31
 */

namespace Creational\AbstractFactory;


/**
 * Class DigitalProduct
 * @package Creational\AbstractFactory
 */
class DigitalProduct implements Product
{
	/**
	 * @var int
	 */
	private $price;

	/**
	 * DigitalProduct constructor.
	 * @param int $price
	 */
	public function __construct(int $price)
	{
		$this->price = $price;
	}

	/**
	 * @return int
	 */
	public function calculatePrice(): int
	{
		return $this->price;
	}
}