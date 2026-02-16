# Localization

SwiftPHP supports multi-language applications.

## Example Structure

```
localization/
├── hu/
│   └── auth.php
└── en/
    └── auth.php
```

## Usage Example

Inside a controller:

```php
$this->lang('login_title', 'auth');
```

Default language is configured inside:

```
config/config.php
```

---
