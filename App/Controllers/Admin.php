<?php

namespace App\Controllers;

use App\Controller;

class Admin extends Controller
{
    public function action()
    {
        $data = \App\Models\Article::findAll();

        include __DIR__ . '/../../templates/admin.php';
    }
}