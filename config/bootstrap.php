<?php

session_start();

date_default_timezone_set('Asia/Tehran');

global $route;

require_once 'database.php';

require_once 'routes.php';

//Handle 404 errors
Flight::route('*', function () {
    abort(404);
});

Flight::start();
