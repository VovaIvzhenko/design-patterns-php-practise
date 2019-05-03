<?php

require_once '../../../vendor/autoload.php';

use Structural\DataMapper\User;
use Structural\DataMapper\UserMapper;
use Structural\DataMapper\StorageAdapter;

/**
 * Class DataMapperTest
 */
class DataMapperTest {
	/**
	 * @throws Exception
	 */
	public function testCanMapUserFromStorage()
	{
		$storage = new StorageAdapter([
			1 => ['username' => 'Vovka', 'email' => 'vovka@gmail.com']
		]);
		$mapper = new UserMapper($storage);

		$user = $mapper->findById(1);

		var_dump($user);
	}

	/**
	 * @throws Exception
	 */
	public function testWillNotMapInvalidData()
	{
		$storage = new StorageAdapter([]);
		$mapper = new UserMapper($storage);

		$user = $mapper->findById(1);

		var_dump($user);
	}
}

$dataMapperTest = new DataMapperTest();
try{
	$dataMapperTest->testCanMapUserFromStorage();
	$dataMapperTest->testWillNotMapInvalidData();
} catch (Exception $e) {
	var_dump($e->getMessage());
}