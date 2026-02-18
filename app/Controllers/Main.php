<?php

namespace App\Controllers;

use App\Core\Controller;

class Main extends Controller
{
    public function dashboard()
    {
        if (!$this->isLoggedIn()) {
            $this->redirect('/dashboard');
        }

        return $this->view('main/dashboard', [
            'title' => $this->lang('dashboard_title', 'main')
        ]);
    }

    protected function isLoggedIn(): bool
    {
        return isset($_SESSION['user']['id']);
    }

    protected function redirect(string $url)
    {
        header("Location: {$url}");
        exit;
    }
}
