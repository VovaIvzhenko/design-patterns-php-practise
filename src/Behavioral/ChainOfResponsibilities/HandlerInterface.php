<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 02.05.2019
 * Time: 16:46
 */

namespace Behavioral\Observer\ChainOfResponsibilities;


/**
 * Interface HandlerInterface
 * @package Behavioral\Observer\ChainOfResponsibilities
 */
interface HandlerInterface
{
	/**
	 * @param HandlerInterface $handler
	 * @return HandlerInterface
	 */
	public function setNext(HandlerInterface $handler): HandlerInterface;

	/**
	 * @param string $request
	 * @return null|string
	 */
	public function handle(string $request):? string;
}