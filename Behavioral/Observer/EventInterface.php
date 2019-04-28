<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:33
 */

namespace Behavioral\Observer;


interface EventInterface
{
    public function getName();

    public function getSender();
}