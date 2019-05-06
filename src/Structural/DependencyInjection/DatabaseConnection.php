<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 10:20
 */

namespace Structural\DependencyInjection;


/**
 * Class DatabaseConnection
 * @package Structural\DependencyInjection
 */
class DatabaseConnection
{
	/**
	 * @var DatabaseConfig
	 */
	private $configuration;

	/**
	 * DatabaseConnection constructor.
	 * @param DatabaseConfig $config
	 */
	public function __construct(DatabaseConfig $config)
	{
		$this->configuration = $config;
	}

	/**
	 * @return string
	 */
	public function getDsn(): string
	{
		return sprintf(
			'%s:%s@%s:%d',
			$this->configuration->getUsername(),
			$this->configuration->getPassword(),
			$this->configuration->getHost(),
			$this->configuration->getPort()
		);
	}
}