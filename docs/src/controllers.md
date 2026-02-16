# Controllers

Controllers handle HTTP requests and return responses.

Example:

```php
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
```

Controllers:

- Receive request data
- Validate input
- Call models
- Return views or redirects

---
