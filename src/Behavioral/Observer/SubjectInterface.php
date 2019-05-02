<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:31
 */

namespace Behavioral\Observer;


/**
 * Interface SubjectInterface
 * @package Behavioral\Observer
 */
interface SubjectInterface
{
    /**
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function attachObserver(ObserverInterface $observer);

    /**
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function detachObserver(ObserverInterface $observer);

    /**
     * @param EventInterface $event
     * @return mixed
     */
    public function notify(EventInterface $event);
}