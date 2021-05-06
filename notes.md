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

__middleware___
1. php artisan make:middleware ageCheck
    - creates file ageCheck.php in app\http\middleware\
Middleware are of three types
   1. global middleware than run on every request regardless of page
   2. Group middleware
        //write a middleware in app kernel group, and include routes inside a group function in the route/web file
        Route::group(['middleware' => ['protectedPage']], function(){
        Route::get('/', [Home::class, 'index']);
        Route::view("login", "login");
        });
   3. Individual route middleware
