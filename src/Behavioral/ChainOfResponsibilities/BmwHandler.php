<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 02.05.2019
 * Time: 16:53
 */

namespace Behavioral\ChainOfResponsibilities;


/**
 * Class BmwHandler
 * @package Behavioral\Observer\ChainOfResponsibilities
 */
class BmwHandler extends AbstractHandler
{
	/**
	 * @param string $request
	 * @return null|string
	 */
	public function handle(string $request): ?string
	{
		if ($request === '280') {
			return "BMW: speed {$request} km/h \n";
		} else {
			return parent::handle($request);
		}
	}
}