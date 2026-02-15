<?php

namespace App\Controllers;

use App\Core\Controller;

class Auth extends Controller
{
    public function login()
    {
        if ($this->isLoggedIn()) {
            $this->redirect('/dashboard');
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

            $userModel = $this->model('User');
            $user = $userModel->findByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fullname'] = $user['full_name'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                return $this->redirect('/dashboard');
            }

            return $this->view('auth/login', [
                'title' => $this->lang('login_title', 'auth'),
                'error' => $this->lang('invalid_credentials', 'auth')
            ]);
        }

        return $this->view('auth/login', [
            'title' => $this->lang('login_title', 'auth')
        ]);
    }

    public function register()
    {
        if ($this->isLoggedIn()) {
            $this->redirect('/dashboard');
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

            $userModel = $this->model('User');

            if ($userModel->findByUsername($data['username'])) {
                return $this->view('auth/register', [
                    'title' => $this->lang('register_title', 'auth'),
                    'error' => $this->lang('username_unavailable', 'auth')
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
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }
        session_destroy();

        $this->redirect('/auth/login');
    }

    protected function isLoggedIn(): bool
    {
        return isset($_SESSION['user_id']);
    }

    protected function redirect(string $url)
    {
        header("Location: {$url}");
        exit;
    }
}
