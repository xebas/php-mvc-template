<?php
/*
* ==========================================================
*   INDEX - Bootstraping / FrontController instance
* ==========================================================
*/
require dirname(__DIR__) . '/Core/Bootstrap.php';

$reflector = new ReflectionClass(APP);
$app = $reflector->newInstance();
$app->run();
