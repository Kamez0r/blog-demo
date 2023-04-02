<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'body',
    ];

    protected $casts = [
        'publish_date' => 'datetime',
    ];

    public function author() {
        return User::find(1);
    }
}
