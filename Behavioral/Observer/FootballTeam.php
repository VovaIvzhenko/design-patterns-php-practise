<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:34
 */

namespace Behavioral\Observer;


/**
 * Class FootballTeam
 * @package Behavioral\Observer
 */
class FootballTeam implements SubjectInterface
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $observers = [];

    /**
     * FootballTeam constructor.
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
     * @param ObserverInterface $observer
     */
    public function attachObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param ObserverInterface $observer
     */
    public function detachObserver(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$key]);
                return;
            }
        }
    }

    /**
     * @param EventInterface $event
     */
    public function notify(EventInterface $event)
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }

    public function goalAction()
    {
        $event = new FootballEvent(FootballEvent::GOAL, $this);
        $this->notify($event);
    }

    public function goalEnemyAction()
    {
        $event = new FootballEvent(FootballEvent::GOAL_ENEMY, $this);
        $this->notify($event);
    }

    public function goalFight()
    {
        $event = new FootballEvent(FootballEvent::FIGHT, $this);
        $this->notify($event);
    }
}