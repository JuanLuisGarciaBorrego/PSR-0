<?php
/**
 * @author: JuanLuis
 * @date: 14/10/14 22:27
 */

require __DIR__."/../vendor/autoload.php";

use VendorName\Application;
use VendorName\FirstName;
use Carbon\Carbon;

$RandomName = new FirstName();

$app = new Application($RandomName->getName());

printf("\n\nHi ".$app->greeting()."!!\nToday is ".Carbon::now()->day."\n\n");
