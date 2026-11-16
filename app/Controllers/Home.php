<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $kopiController = new Kopi();
        return $kopiController->index();
    }
}
