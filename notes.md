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

__laravel model__
what is model? Make model? Fetch data from model, show data


    Map Database table with class Name
    Define database Structure
    Write Business Login

    DB Table        Model Name
    users           user
    employees       employee

__HTTP Request Methods__

GEt - select from table
post - insert into table
put - update table
delete - 
head
patch - update columns
options

__sessions__

There a method to store input as sessions, as use them to display data to the user
public function postLogin(Request $request){
        $data = $request->input();
        $request->session()->put('username', $data['username']);
        return redirect ('userprofile');
    }

__flash session__


