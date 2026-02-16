<?php

namespace App\Controllers;

use App\Core\Controller;

class Profile extends Controller
{
    public function edit()
    {
        $this->requireAuth();

        $userModel = $this->model('User');
        $userId = $_SESSION['user']['id'];

        $data = [
            'title' => $this->lang('profile_edit_title', 'profile'),
            'user'  => $_SESSION['user']
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $updateData = [
                'fullname' => trim($_POST['fullname'] ?? ''),
                'username' => trim($_POST['username'] ?? ''),
                'email'    => trim($_POST['email'] ?? '')
            ];

            if (in_array('', $updateData, true)) {
                $data['error'] = $this->lang('all_fields_required', 'profile');
                return $this->view('profile/edit', $data);
            }

            $existingUser = $userModel->findByUsername($updateData['username']);
            if ($existingUser && $existingUser['id'] != $userId) {
                $data['error'] = $this->lang('username_taken', 'profile');
                return $this->view('profile/edit', $data);
            }

            $existingEmail = $userModel->findByEmail($updateData['email'], $userId);
            if ($existingEmail) {
                $data['error'] = $this->lang('email_taken', 'profile');
                return $this->view('profile/edit', $data);
            }

            if ($userModel->update($userId, $updateData)) {
                $userModel->refreshSession($userId);
                $data['user'] = $_SESSION['user'];
                $data['success'] = $this->lang('profile_update_success', 'profile');
            } else {
                $data['error'] = $this->lang('profile_update_error', 'profile');
            }
        }

        return $this->view('profile/edit', $data);
    }

    public function password()
    {
        $this->requireAuth();

        $data = ['title' => $this->lang('password_change_title', 'profile')];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = $this->model('User');
            $userId = $_SESSION['user']['id'];

            $currentPassword = $_POST['current_password'] ?? '';
            $newPassword = $_POST['new_password'] ?? '';
            $confirmPassword = $_POST['confirm_password'] ?? '';

            if (!$currentPassword || !$newPassword || !$confirmPassword) {
                $data['error'] = $this->lang('all_fields_required', 'profile');
                return $this->view('profile/password', $data);
            }

            if (strlen($newPassword) < 6) {
                $data['error'] = $this->lang('password_too_short', 'profile');
                return $this->view('profile/password', $data);
            }

            if ($newPassword !== $confirmPassword) {
                $data['error'] = $this->lang('password_mismatch', 'profile');
                return $this->view('profile/password', $data);
            }

            $user = $userModel->findWithPassword($userId);
            if (!$user || !password_verify($currentPassword, $user['password'])) {
                $data['error'] = $this->lang('current_password_invalid', 'profile');
                return $this->view('profile/password', $data);
            }

            if ($userModel->updatePassword($userId, $newPassword)) {
                $data['success'] = $this->lang('password_update_success', 'profile');
            } else {
                $data['error'] = $this->lang('password_update_error', 'profile');
            }
        }

        return $this->view('profile/password', $data);
    }

    protected function requireAuth(): void
    {
        if (!isset($_SESSION['user']['id'])) {
            $this->redirect('/auth/login');
        }
    }

    protected function redirect(string $url)
    {
        header("Location: {$url}");
        exit;
    }
}
