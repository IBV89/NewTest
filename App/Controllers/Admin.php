<?php

namespace App\Controllers;

use App\Controller;

class Admin extends Controller
{

    protected function access(): bool
    {
        return isset($_GET['name']) && $_GET['name'] == 'admin';
    }

    public function handle()
    {
        $data = \App\Models\Article::findAll();

        include __DIR__ . '/../../templates/admin.php';
    }
}