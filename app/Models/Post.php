<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /*
    saves from mass assignment vulnerability
    */
    protected $fillable = [
        'title', 'excerpt', 'body'
    ];

    public function category()
    {
        //  hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
}
