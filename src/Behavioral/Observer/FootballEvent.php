<?php
/**
 * Created by PhpStorm.
 * User: volodymyr.ivzhenko
 * Date: 29.04.2019
 * Time: 0:36
 */

namespace Behavioral\Observer;


/**
 * Class FootballEvent
 * @package Behavioral\Observer
 */
class FootballEvent implements EventInterface
{
    /**
     * @const string
     */
    const GOAL = 'goal';
    /**
     * @const string
     */
    const GOAL_ENEMY = 'goal_enemy';
    /**
     * @const string
     */
    const FIGHT = 'fight';

    /**
     * @var string
     */
    private $name;
    /**
     * @var FootballTeam
     */
    private $sender;

    /**
     * FootballEvent constructor.
     * @param string $name
     * @param FootballTeam $sender
     */
    public function __construct(string $name, FootballTeam $sender)
    {
        $this->name = $name;
        $this->sender = $sender;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return FootballTeam|mixed
     */
    public function getSender()
    {
        return $this->sender;
    }
}