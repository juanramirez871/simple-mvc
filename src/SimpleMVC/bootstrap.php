<?php

use Celyes\SimpleMVC\App;
use Celyes\SimpleMVC\Database\Connection;

App::bind('config', require 'config.php');
App::bind('request', $_REQUEST);
App::bind('controllers-path', 'App\\Controllers\\');


$db = Connection::make([
    'connection' => 'mysql:host=localhost',
    'name' => 'pruebas',
    'username' => 'root',
    'password' => '@devJuanBack1',
    'host' => 'localhost',
]);

App::bind('database', $db);