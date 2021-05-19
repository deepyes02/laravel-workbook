userful tinker commands
__use a model__

use App\Models\User

or, 

App\Models\User::factory(10)->create();
App\Models\User::factory()->create();       ##make a model##

__Create a model__
php artisan make:model User

__model with migration__
php artisan make:model User -m

__model with migration and factory__
php artisan make:model User -mf

__model with migration, factory as well as seeder__
php artisan make:model User -mfs
## Note ## Individual seeder may not be needed, since databse/seeders/DatabaseSeeder.php can do the trick

__or just create an individual factory__
php artisan make:factory UserFactory

__getting post with relationships__
Post::with('user', 'category')->first() //returns a collection$ first post with user and category objects