<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:31
 */

namespace Behavioral\Observer;


interface SubjectInterface
{
    public function attachObserver(ObserverInterface $observer);

    public function detachObserver(ObserverInterface $observer);

    public function notify(EventInterface $event);
}