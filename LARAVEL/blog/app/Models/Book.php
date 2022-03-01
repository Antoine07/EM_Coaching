<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use Carbon\Carbon;

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
        return $this->belongsToMany(Author::class);
    }

    public function manager()
    {
        return $this->belongsTo(Auth::class);
    }

    // MUTATOR published_at => traitement sur la date 
    public function getPublishedAtAttribute($date)
    {
        // Carbon vous permet de mettre au format souhaité votre date
        return Carbon::parse($date)->format('d/m/Y');
    }
}
