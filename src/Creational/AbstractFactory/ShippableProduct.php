<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 07.05.2019
 * Time: 11:33
 */

namespace Creational\AbstractFactory;


/**
 * Class ShippableProduct
 * @package Creational\AbstractFactory
 */
class ShippableProduct implements Product
{
	/**
	 * @var int
	 */
	private $productPrice;

	/**
	 * @var int
	 */
	private $shippingCost;

	/**
	 * ShippableProduct constructor.
	 * @param int $productPrice
	 * @param int $shippingCost
	 */
	public function __construct(int $productPrice, int $shippingCost)
	{
		$this->productPrice = $productPrice;
		$this->shippingCost = $shippingCost;
	}

	/**
	 * @return int
	 */
	public function calculatePrice(): int
	{
		return $this->productPrice + $this->shippingCost;
	}
}