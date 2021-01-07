<?php
require './vendor/autoload.php';

use Test\Test\MakePDF;
$make = new MakePDF('dad');

$make->make();