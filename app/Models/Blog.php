<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Each blog belongs to an author
    // --------------------------------------------------------------------------------------------
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}