<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // cablé les livres à un genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
