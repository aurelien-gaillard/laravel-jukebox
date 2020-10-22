<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(\App\Models\Author::class);
    }

    public function genres()
    {
        return $this->belongsToMany(\App\Models\Genre::class);
    }
}
