<?php

namespace App\Controllers;

class IndexController
{
    public function index(): void
    {
        view("index");
    }
}