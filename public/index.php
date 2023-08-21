<?php

use Pasha\Mvcproject\Http\Router;

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// TODO: Maak de router class static en zorg dat er een manier is om routes te registreren in een apart bestand zoals bij laravel routes/web.php
$router = new Router();

