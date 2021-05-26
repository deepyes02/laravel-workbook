<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Link;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('description');
            $table->timestamps();
        });

        //create two automatic links with migration
        Link::create([
            'url'   => 'https://www.github.com/deepyes02',
            'description'   =>  'My github pages for repositories and coder profile',
        ]);

        Link::create([
            'url'   => 'https://mrdeepeshdhakal.wordpress.com',
            'description'   =>  'A wordpress website where I write my thoughts and stories',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
