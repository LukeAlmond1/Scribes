<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // An author has many blogs
    // --------------------------------------------------------------------------------------------
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}