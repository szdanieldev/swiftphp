<?php

namespace App\Core;

class Localization
{
    protected array $lang = [];
    protected string $locale;
    protected string $path;

    public function __construct(string $locale = null)
    {
        $config = require __DIR__ . '/../../config/config.php';
        $this->locale = $locale ?? $config['app']['default_lang'];
        $this->path   = $config['localization']['path'] ?? __DIR__ . '/../../localization/';
        $this->load($this->locale);
    }

    protected function load(string $locale, string $file = 'app')
    {
        $filePath = rtrim($this->path, '/') . "/{$locale}.php";

        if (file_exists($filePath)) {
            $allTranslations = require $filePath;
            if (isset($allTranslations[$file]) && is_array($allTranslations[$file])) {
                $this->lang[$file] = $allTranslations[$file];
            } else {
                $this->lang[$file] = $allTranslations;
            }
        } else {
            $this->lang[$file] = [];
        }
    }

    public function get(string $key, string $file = 'app', string $default = ''): string
    {
        return $this->lang[$file][$key] ?? $default;
    }

    public function lang(string $key, string $file = 'app', string $default = ''): string
    {
        return $this->get($key, $file, $default);
    }
}
