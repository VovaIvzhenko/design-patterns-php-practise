<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 02.05.2019
 * Time: 16:53
 */

namespace Behavioral\Observer\ChainOfResponsibilities;


/**
 * Class NissanHandler
 * @package Behavioral\Observer\ChainOfResponsibilities
 */
class NissanHandler extends AbstractHandler
{
	/**
	 * @param string $request
	 * @return null|string
	 */
	public function handle(string $request): ?string
	{
		if ($request === '240') {
			return "Nissan: speed {$request} km/h \n";
		} else {
			return parent::handle($request);
		}
	}
}