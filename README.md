# SwiftPHP ⚡

> SwiftPHP is a lightweight and modern MVC framework built with pure PHP.
> It focuses on simplicity, performance, and developer control without unnecessary complexity.

SwiftPHP provides a clean foundation for building web applications with built-in routing, authentication, localization, and configuration handling.

---

## ✨ Core Features

- Clean MVC architecture
- Custom routing system
- Built-in authentication (Login / Register / Logout)
- Configuration-based application setup
- Localization system (multi-language support)
- HTTP error handling
- Simple and extendable structure

SwiftPHP is designed to stay minimal while still covering the essential features required for modern PHP applications.

---

## 📁 Project Structure

```text
swiftphp/
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Core/
│   └── Views/
│
├── config/
│   └── config.php
│
├── localization/
│   ├── hu/
│   └── en/
│
├── public/
│   └── index.php
│
├── docs/
│
└── README.md
```

Detailed technical documentation is available inside the `/docs` directory.

---

## 🚀 Installation

### 1. Clone the repository

```bash
git clone https://github.com/szdanieldev/swiftphp.git
```

### 2. Navigate into the project directory

```bash
cd swiftphp
```

### 3. Create your configuration file

```bash
cp config/config.php.example config/config.php
```

### 4. Configure your application

Edit:

```text
config/config.php
```

Set your database credentials and application settings.

### 5. Configure your web server

Set the document root to:

```text
/public
```

SwiftPHP does not require Node.js by default.

---

## 🔐 Authentication

SwiftPHP includes a built-in authentication system with:

- User registration
- Login
- Session handling
- Logout

Available routes:

```text
/auth/login
/auth/register
/auth/logout
```

The authentication system is fully customizable and extendable.

---

## 🌍 Localization

SwiftPHP supports multiple languages through the `localization/` directory.

Example structure:

```text
localization/
├── hu/
│   └── auth.php
└── en/
    └── auth.php
```

Usage example inside a controller:

```php
$this->lang('login_title', 'auth');
```

The default language can be configured inside:

```text
config/config.php
```

---

## 📖 Documentation

Full technical documentation is available in the `/docs` directory.

---

## 🛣 Roadmap

Planned future improvements:

- Middleware system
- CLI tooling
- Plugin / package system
- Improved debugging mode
- Optional template engine support
- Caching layer
- REST API utilities

---

## 📜 License

SwiftPHP is published under the [MIT License](https://github.com/szdanieldev/swiftphp/blob/master/LICENSE).
