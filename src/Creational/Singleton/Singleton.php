<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 18:40
 */

namespace Creational\Singleton;


/**
 * Class Singleton
 * @package Creational\Singleton
 */
class Singleton
{
	/**
	 * @var
	 */
	private static $instance;

	/**
	 * Singleton constructor.
	 */
	protected function __construct(){}

	protected function __clone(){}

	/**
	 * @return Singleton
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}