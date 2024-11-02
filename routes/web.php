<?php

use App\Controllers\IndexController;
use App\Controllers\ProjectController;

Flight::route("/", [IndexController::class, "index"]);

Flight::route("/accessory", [ProjectController::class, "accessory"]);
Flight::route("/travel", [ProjectController::class, "travel"]);
Flight::route("/mahdis", [ProjectController::class, "mahdis"]);