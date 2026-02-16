<?php

namespace App\Controllers;

use App\Core\Controller;

class Auth extends Controller
{
    public function login()
    {
        $userModel = $this->model('User');

        if ($this->check()) {
            return $this->redirect('/dashboard');
        }

        $success = null;
        if (isset($_GET['registered']) && $_GET['registered'] == 1) {
            $success = $this->lang('registration_success', 'auth');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = $_POST['password'] ?? '';

            if (!$username || !$password) {
                return $this->view('auth/login', [
                    'title' => $this->lang('login_title', 'auth'),
                    'error' => $this->lang('all_fields_required', 'auth')
                ]);
            }

            $user = $userModel->attempt($username, $password);

            if ($user) {
                $userModel->login($user);
                return $this->redirect('/dashboard');
            }

            return $this->view('auth/login', [
                'title' => $this->lang('login_title', 'auth'),
                'error' => $this->lang('invalid_credentials', 'auth')
            ]);
        }

        return $this->view('auth/login', [
            'title' => $this->lang('login_title', 'auth'),
            'success' => $success
        ]);
    }

    public function register()
    {
        $userModel = $this->model('User');

        if ($this->check()) {
            return $this->redirect('/dashboard');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'fullname' => trim($_POST['fullname'] ?? ''),
                'username' => trim($_POST['username'] ?? ''),
                'email'    => trim($_POST['email'] ?? ''),
                'password' => $_POST['password'] ?? ''
            ];

            if (in_array('', $data, true)) {
                return $this->view('auth/register', [
                    'title' => $this->lang('register_title', 'auth'),
                    'error' => $this->lang('all_fields_required', 'auth')
                ]);
            }

            if ($userModel->findByUsername($data['username'])) {
                return $this->view('auth/register', [
                    'title' => $this->lang('register_title', 'auth'),
                    'error' => $this->lang('username_unavailable', 'auth')
                ]);
            }

            if ($userModel->findByEmail($data['email'])) {
                return $this->view('auth/register', [
                    'title' => $this->lang('register_title', 'auth'),
                    'error' => $this->lang('email_unavailable', 'auth')
                ]);
            }

            if ($userModel->create($data)) {
                return $this->redirect('/auth/login?registered=1');
            }

            return $this->view('auth/register', [
                'title' => $this->lang('register_title', 'auth'),
                'error' => $this->lang('registration_error', 'auth')
            ]);
        }

        return $this->view('auth/register', [
            'title' => $this->lang('register_title', 'auth')
        ]);
    }

    public function logout()
    {
        unset($_SESSION['user']);
        session_destroy();
        return $this->redirect('/auth/login');
    }

    public function check(): bool
    {
        return isset($_SESSION['user']['id']);
    }

    protected function redirect(string $url)
    {
        header("Location: {$url}");
        exit;
    }
}
