# Basic Usage

## Creating a Route

In `routes/web.php`:

```php
$router->get('/hello', 'HomeController@hello');
```

## Creating a Controller Method

In `app/Controllers/HomeController.php`:

```php
public function hello()
{
    return view('hello');
}
```

## Creating a View

Create `app/Views/hello.php`:

```php
<h1>Hello SwiftPHP!</h1>
```

Visit:

```
http://localhost/hello
```

---
