<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:32
 */

namespace Behavioral\Observer;


/**
 * Interface ObserverInterface
 * @package Behavioral\Observer
 */
interface ObserverInterface
{
    /**
     * @param EventInterface $event
     * @return mixed
     */
    public function update(EventInterface $event);
}