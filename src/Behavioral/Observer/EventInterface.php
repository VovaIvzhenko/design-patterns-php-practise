<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:33
 */

namespace Behavioral\Observer;


/**
 * Interface EventInterface
 * @package Behavioral\Observer
 */
interface EventInterface
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getSender();
}