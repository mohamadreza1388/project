<?php

use App\Controllers\IndexController;

Flight::route("/", [IndexController::class, "index"]);