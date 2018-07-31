<?php
require '../vendor/autoload.php';
require_once '../app/blade.php';

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('\App\Controllers');

require_once '../app/routes.php';
require_once '../vendor/pecee/simple-router/helpers.php';

SimpleRouter::start();