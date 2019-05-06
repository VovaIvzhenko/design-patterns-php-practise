<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 06.05.2019
 * Time: 10:26
 */

namespace Structural\DependencyInjection;


class DependencyInjectionTest
{
	public function testDependencyInjection()
	{
		$config = new DatabaseConfig('localhost', 3306, 'root', '12345');
		$connection = new DatabaseConnection($config);
		var_dump($connection->getDsn());
	}
}