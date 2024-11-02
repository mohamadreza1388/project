<?php

namespace App\Controllers;

class ProjectController
{
    public function accessory(): void
    {
        $dir = env('APP_URL') . DS . 'projects' . DS . 'accessory' . DS . 'index.html';
        view('projects.accessory', [
            'dir' => $dir,
        ]);
    }
    public function travel(): void
    {
        $dir = env('APP_URL') . DS . 'projects' . DS . 'travel' . DS . 'index.html';
        view('projects.travel', [
            'dir' => $dir,
        ]);
    }
}