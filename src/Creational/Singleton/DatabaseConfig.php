<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 18:44
 */

namespace Creational\Singleton;


/**
 * Class DatabaseConfig
 * @package Creational\Singleton
 */
class DatabaseConfig
{
	/**
	 * @var string
	 */
	private $host;
	/**
	 * @var string
	 */
	private $password;
	/**
	 * @var string
	 */
	private $username;
	/**
	 * @var int
	 */
	private $port;

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