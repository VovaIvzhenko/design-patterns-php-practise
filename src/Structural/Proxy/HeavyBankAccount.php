<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 17:56
 */

namespace Structural\Proxy;


/**
 * Class HeavyBankAccount
 * @package Structural\Proxy
 */
class HeavyBankAccount implements BankAccountInterface
{
	/**
	 * @var array
	 */
	private $transaction = [];

	/**
	 * @param int $amount
	 * @return mixed|void
	 */
	public function deposit(int $amount)
	{
		$this->transaction[] = $amount;
	}

	/**
	 * @return int
	 */
	public function getBalance(): int
	{
		return array_sum($this->transaction);
	}
}