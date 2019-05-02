<?php

use Behavioral\Observer\FootballTeam;
use Behavioral\Observer\FootballFan;

$team = new FootballTeam('Arsenal');
$fan = new FootballFan('John');
$fan2 = new FootballFan('Jack');

$team->attachObserver($fan);
$team->attachObserver($fan2);

$team->goalAction();
$team->goalEnemyAction();

$team->detachObserver($fan);

$team->goalFight();

$fan3 = new FootballFan('Harry Hummer');
$team->attachObserver($fan3);

$team->goalFight();

