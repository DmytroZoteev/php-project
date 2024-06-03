<?php

require_once 'config/config.php';
require_once 'core/Router.php';

use core\Router;

$router = new Router();
$router->run();

?>
