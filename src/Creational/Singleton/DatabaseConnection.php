<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 18:44
 */

namespace Creational\Singleton;


/**
 * Class DatabaseConnection
 * @package Creational\Singleton
 */
class DatabaseConnection
{
	/**
	 * @var DatabaseConfig
	 */
	private $configuration;

	/**
	 * @var
	 */
	private static $instance;

	/**
	 * DatabaseConnection constructor.
	 */
	protected function __construct() {}

	protected function __clone() {}

	/**
	 * @return DatabaseConnection
	 */
	public static function getInstance(): DatabaseConnection
	{
		if (self::$instance === null) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * @param DatabaseConfig $config
	 */
	public function setConfig(DatabaseConfig $config)
	{
		$this->configuration = $config;
	}

	/**
	 * @return int
	 */
	public function getDns()
	{
		return printf(
			'%s:%s@%d:%s',
			$this->configuration->getHost(),
			$this->configuration->getPort(),
			$this->configuration->getUsername(),
			$this->configuration->getPassword()
		);
	}
}