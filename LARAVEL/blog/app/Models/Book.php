<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;

    // cablé les livres à un genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function authors()
    {
        return $this->hasMany(Auth::class);
    }

    public function manager()
    {
        return $this->belongsTo(Auth::class);
    }
}
