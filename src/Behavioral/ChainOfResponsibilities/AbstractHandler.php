<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 02.05.2019
 * Time: 16:49
 */

namespace Behavioral\Observer\ChainOfResponsibilities;


/**
 * Class AbstractHandler
 * @package Behavioral\Observer\ChainOfResponsibilities
 */
abstract class AbstractHandler implements HandlerInterface
{
	private $nextHandler;
	/**
	 * @param HandlerInterface $handler
	 * @return HandlerInterface
	 */
	public function setNext(HandlerInterface $handler): HandlerInterface
	{
		$this->nextHandler = $handler;
		return $handler;
	}

	/**
	 * @param string $request
	 * @return null|string
	 */
	public function handle(string $request): ?string
	{
		if ($this->nextHandler) {
			return $this->nextHandler->handle($request);
		}

		return null;
	}
}