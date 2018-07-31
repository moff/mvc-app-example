<?php
require '../vendor/autoload.php';
require_once '../app/blade.php';

// load config values
$config = new Dotenv\Dotenv(dirname(__DIR__));
$config->load();

// boot Eloquent ORM
use Core\Database;
new Database();

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('\App\Controllers');

require_once '../app/routes.php';
require_once '../vendor/pecee/simple-router/helpers.php';

SimpleRouter::start();