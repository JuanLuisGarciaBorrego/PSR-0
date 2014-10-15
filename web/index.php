<?php
/**
 * @author: JuanLuis
 * @date: 14/10/14 22:27
 */

require __DIR__."/../src/VendorName/Application.php";
require __DIR__."/../src/VendorName/FirstName.php";

use VendorName\Application;
use VendorName\FirstName;

$RandomName = new FirstName();

$app = new Application($RandomName->getName());

printf($app->greeting()."\n\n");