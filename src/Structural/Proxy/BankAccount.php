<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 17:54
 */

namespace Structural\Proxy;


/**
 * Interface BankAccount
 * @package Structural\Proxy
 */
interface BankAccount
{
	/**
	 * @param int $amount
	 * @return mixed
	 */
	public function deposit(int $amount);

	/**
	 * @return mixed
	 */
	public function getBalance();
}