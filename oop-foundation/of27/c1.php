<?php
namespace Project;
use \Project\MotorCycles\Bike as Pulsar;
include 'e1.php';
include 'e2.php';

$kbr = new Bike();
$kbr->getName();

$pulsar = new MotorCycles\Bike();
$pulsar->getName();

$p = new Pulsar();
$p->getName();