<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 17:59
 */

namespace Structural\Proxy;


/**
 * Class BankAccountInterfaceProxy
 * @package Structural\Proxy
 */
class BankAccountProxy extends HeavyBankAccount implements BankAccountInterface
{
	/**
	 * @var
	 */
	private $balance;

	/**
	 * @return int
	 */
	public function getBalance(): int
	{
		if ($this->balance === null) {
			$this->balance = parent::getBalance();
		}

		return $this->balance;
	}
}