<?php
/**
 * Created by PhpStorm.
 * User: ivzhenko.volodymyr
 * Date: 02.05.2019
 * Time: 16:52
 */

namespace Behavioral\ChainOfResponsibilities;


/**
 * Class AudiHandler
 * @package Behavioral\Observer\ChainOfResponsibilities
 */
class AudiHandler extends AbstractHandler
{
	/**
	 * @param string $request
	 * @return null|string
	 */
	public function handle(string $request): ?string
	{
		if ($request === '300') {
			return "Audi: speed {$request} km/h \n";
		} else {
			return parent::handle($request);
		}
	}
}