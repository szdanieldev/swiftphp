<?php

namespace App\Controllers;

use App\Core\Controller;

class Welcome extends Controller
{
    public function index()
    {
        $this->view("welcome/welcome");
    }
}
