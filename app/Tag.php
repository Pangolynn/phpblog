<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongstoMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
