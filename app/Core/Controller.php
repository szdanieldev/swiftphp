<?php

namespace App\Core;

class Controller
{
    protected $locale;
    protected $translations = [];

    public function __construct()
    {
        $config = require __DIR__ . '/../../config/config.php';
        $this->locale = $config['app']['default_lang'] ?? 'hu';
        $localizationPath = $config['localization']['path'] . $this->locale . '/';

        if (is_dir($localizationPath)) {
            foreach (glob($localizationPath . '*.php') as $file) {
                $key = basename($file, '.php');
                $this->translations[$key] = require $file;
            }
        }
    }

    protected function lang(string $key, string $file = 'common'): string
    {
        return $this->translations[$file][$key] ?? $key;
    }

    protected function model($model)
    {
        require_once __DIR__ . '/../Models/' . $model . '.php';
        $modelClass = 'App\\Models\\' . $model;
        return new $modelClass();
    }

    protected function view(string $view, array $data = [], ?string $layout = null)
    {
        $viewFile = __DIR__ . "/../Views/{$view}.php";

        if (!file_exists($viewFile)) {
            $this->triggerError(404);
        }

        extract($data);

        ob_start();
        include $viewFile;
        $content = ob_get_clean();

        if ($layout) {
            $layoutFile = __DIR__ . "/../Views/_layouts/{$layout}.php";
            if (!file_exists($layoutFile)) {
                $this->triggerError(500, "Layout not found: {$layout}");
            }

            ob_start();
            include $layoutFile;
            $content = ob_get_clean();
        }

        $masterFile = __DIR__ . "/../Views/_layouts/master.php";
        if (!file_exists($masterFile)) {
            $this->triggerError(500, 'Master layout missing.');
        }

        include $masterFile;
    }

    protected function triggerError(int $code = 500, string $message = null)
    {
        http_response_code($code);

        $errorClass = 'App\\Controllers\\Error';
        static $called = false;

        if (class_exists($errorClass) && !$called) {
            $called = true;
            $controller = new $errorClass();
            if ($message) {
                $controller->displayError($code, $message);
            } else {
                $controller->displayError($code);
            }
            exit;
        }

        $msg = $message ?? "Error {$code} occurred.";
        echo "<!DOCTYPE html>
<html>
<head><meta charset='UTF-8'><title>Error {$code}</title></head>
<body>
<h1>Error {$code}</h1><p>{$msg}</p>
</body></html>";
        exit;
    }
}
