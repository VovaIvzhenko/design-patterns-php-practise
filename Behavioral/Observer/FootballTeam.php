<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:34
 */

namespace Behavioral\Observer;


class FootballTeam implements SubjectInterface
{
    private $name;
    private $observers = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attachObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function detachObserver(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$key]);
                return;
            }
        }
    }

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