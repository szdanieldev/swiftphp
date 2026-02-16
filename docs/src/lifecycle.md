# Request Lifecycle

1. Request enters through `public/index.php`
2. Core system initializes
3. Router matches route
4. Controller executes
5. View renders output
6. Response is sent to browser

Each request runs independently and completes its own lifecycle.
