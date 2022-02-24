<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('books')->insert([
        //     'title' => Str::random(30),
        //     'description' => Str::random(1000),
        //     'published_at' => new \DateTime,
        //     // 'pagenumber' => smallint::random(100),
        //     // 'chapitre' => varchar::random(100),
        // ]);

        // On utilise le modèle pour les seeders
        // $book  
        // print_r(Genre::all());

        $genrePhp = Genre::where('name', 'php')->firstOrFail();

        $book = new Book();

        $book->title = "PHP avancé";
        $book->description = Str::random(1000);
        $book->published_at = new \DateTime;

        // associer le livre au genre php
        $book->genre()->associate($genrePhp);

        $book->save();

        $book = new Book();

        $book->title = "Programmer avec MySQL";
        $book->description = Str::random(1000);
        $book->published_at = new \DateTime;

        $book->save();

        $genres = Genre::all();

        // dump une fonction de Laravel pour debug
        dump($genres);
    }
}
