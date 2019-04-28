<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:36
 */

namespace Behavioral\Observer;


class FootballEvent implements EventInterface
{
    const GOAL = 'goal';
    const GOAL_ENEMY = 'goal_enemy';
    const FIGHT = 'fight';

    private $name;
    private $sender;

    public function __construct(string $name, FootballTeam $sender)
    {
        $this->name = $name;
        $this->sender = $sender;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSender()
    {
        return $this->sender;
    }
}