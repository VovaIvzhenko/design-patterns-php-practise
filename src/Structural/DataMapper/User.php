<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 03.05.2019
 * Time: 11:39
 */

namespace Structural\DataMapper;


class User
{
	/**
	 * @var string
	 */
	private $username;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * User constructor.
	 * @param string $username
	 * @param string $email
	 */
	public function __construct(string $username, string $email)
	{
		$this->username = trim($username);
		$this->email = trim($email);
	}

	public static function fromState(array $state): User
	{
		//TODO:: validate state before accessing keys!

		return new self(
			$state['username'],
			$state['email']
		);
	}

	/**
	 * @return string
	 */
	public function getUserName(): string
	{
		return $this->username;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}
}