<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 10:18
 */

namespace Structural\DependencyInjection;


/**
 * Class DatabaseConfig
 * @package Structural\DependencyInjection
 */
class DatabaseConfig
{
	/**
	 * @var string
	 */
	private $host;

	/**
	 * @var int
	 */
	private $port;

	/**
	 * @var string
	 */
	private $username;

	/**
	 * @var string
	 */
	private $password;

	/**
	 * DatabaseConfig constructor.
	 * @param string $host
	 * @param int $port
	 * @param string $username
	 * @param string $password
	 */
	public function __construct(string $host, int $port, string $username, string $password)
	{
		$this->host = $host;
		$this->port = $port;
		$this->username = $username;
		$this->password = $password;
	}

	/**
	 * @return string
	 */
	public function getHost(): string
	{
		return $this->host;
	}

	/**
	 * @return int
	 */
	public function getPort(): int
	{
		return $this->port;
	}

	/**
	 * @return string
	 */
	public function getUsername(): string
	{
		return $this->username;
	}

	/**
	 * @return string
	 */
	public function getPassword(): string
	{
		return $this->password;
	}
}