<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 03.05.2019
 * Time: 11:40
 */

namespace Structural\DataMapper;


/**
 * Class StorageAdapter
 * @package Structural\DataMapper
 */
class StorageAdapter
{
	/**
	 * @var array
	 */
	private $data = [];

	/**
	 * @param int $id
	 * @return mixed|null
	 */
	public function find(int $id)
	{
		if (isset($this->data[$id])) {
			return $this->data[$id];
		}

		return null;
	}
}