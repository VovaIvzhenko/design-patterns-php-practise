<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:32
 */

namespace Behavioral\Observer;


interface ObserverInterface
{
    public function update(EventInterface $event);
}