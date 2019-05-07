<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 07.05.2019
 * Time: 11:36
 */

namespace Creational\AbstractFactory;


/**
 * Class ProductFactory
 * @package Creational\AbstractFactory
 */
class ProductFactory
{
	const SHIPPING_COST = 45;

	/**
	 * @param int $price
	 * @return DigitalProduct
	 */
	public function createDigitalProduct(int $price): DigitalProduct
	{
		return new DigitalProduct($price);
	}

	/**
	 * @param int $price
	 * @return ShippableProduct
	 */
	public function createShippableProduct(int $price): ShippableProduct
	{
		return new ShippableProduct($price, self::SHIPPING_COST);
	}
}