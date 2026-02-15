<?php

namespace App\Controllers;

use App\Core\Controller;

class Landing extends Controller
{
    public function index()
    {
        $this->view("landing/landing");
    }
}
