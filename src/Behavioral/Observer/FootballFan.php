<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:35
 */

namespace Behavioral\Observer;


/**
 * Class FootballFan
 * @package Behavioral\Observer
 */
class FootballFan implements ObserverInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * FootballFan constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param EventInterface $event
     */
    public function update(EventInterface $event)
    {
        switch ($event->getName()) {
            case FootballEvent::GOAL:
                printf("Goal!!! %s chanting slogan \n", $this->getName());
                break;
            case FootballEvent::GOAL_ENEMY:
                printf("We missed a goal.  %s  !!!\n", $this->getName());
                break;
            case FootballEvent::FIGHT:
                printf("%s breaks a chair \n", $this->getName());
                break;
            default:
                printf("%s and team %s ... \n",
                    $this->getName(), $event->getSender()->getName()
                );
        }
    }
}