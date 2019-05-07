<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 07.05.2019
 * Time: 11:28
 */

namespace Creational\AbstractFactory;


/**
 * Interface Product
 * @package Creational\AbstractFactory
 */
interface Product
{
	/**
	 * @return int
	 */
	public function calculatePrice(): int;
}