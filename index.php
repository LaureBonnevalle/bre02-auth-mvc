<?php

require 'config/autoload.php';
require 'Router.php';

$router = new Router ();
  $router->handleRequest ($_GET);

?>