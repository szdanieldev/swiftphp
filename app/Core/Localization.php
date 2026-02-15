<?php

namespace App\Core;

class Localization
{
    protected $lang = [];
    protected $locale;

    public function __construct(string $locale = null)
    {
        $config = require __DIR__ . '/../../config/config.php';
        $this->locale = $locale ?? $config['app']['default_lang'];
        $this->load($this->locale, $config['localization']['path']);
    }

    protected function load(string $locale, string $path)
    {
        $file = rtrim($path, '/') . '/' . $locale . '.php';
        if (file_exists($file)) {
            $this->lang = require $file;
        } else {
            $this->lang = [];
        }
    }

    public function get(string $key, string $default = '')
    {
        return $this->lang[$key] ?? $default;
    }
}
