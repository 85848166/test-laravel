<?php
require './vendor/autoload.php';

use Test\MakePDF\MakePDF;
$make = new MakePDF('dad');

$make->make();