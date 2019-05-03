<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 03.05.2019
 * Time: 11:40
 */

namespace Structural\DataMapper;



/**
 * Class UserMapper
 * @package Structural\DataMapper
 */
class UserMapper
{
	/**
	 * @var StorageAdapter
	 */
	private $adapter;

	/**
	 * UserMapper constructor.
	 * @param StorageAdapter $storage
	 */
	public function __construct(StorageAdapter $storage)
	{
		$this->adapter = $storage;
	}

	/**
	 * @param int $id
	 * @return User
	 * @throws \Exception
	 */
	public function findById(int $id): User
	{
		$result = $this->adapter->find($id);

		if ($result === null) {
			throw new \Exception("User #{$id} not found");
		}

		return$this->mapRowToUser($result);
	}

	/**
	 * @param array $row
	 * @return User
	 */
	private function mapRowToUser(array $row): User
	{
		return User::fromState($row);
	}
}