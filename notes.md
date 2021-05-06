__laravel controller__
1. php artisan make:controller Users
    - creates Users.php in app\Http\Controllers\
    - write functions here instead of routes
    e.g class Users extends Controller 
    {
        public function index()
        {
            return "Hello from controller"; // or 
            return view("hello");
        }
    }

2. Import controller class and utilize them in routes/web.php
use App\Http\Controllers\Users.php
e.g Route::get("/", [Users::class, 'index']);

__laravel components__
1. php artisan make:component Header
    - creates file Header.php in app\view\components
    - creates file header.blade.php in resources\views\components\
