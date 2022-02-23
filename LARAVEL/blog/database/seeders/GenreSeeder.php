<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Créez les genres php mysql et mongodb
        // lancez la commande php artisan db:seed
        // DB::table('genres')->insert([
        //     'name' => "php"
        // ]);

        // DB::table('genres')->insert([
        //     'name' => "mysql"
        // ]);

        // DB::table('genres')->insert([
        //     'name' => "mongodb"
        // ]);

        $genre = new Genre;
        $genre->name = "PHP";
        $genre->save();

        $genre = new Genre;
        $genre->name = "MySQL";
        $genre->save();

        $genre = new Genre;
        $genre->name = "MongoDB";
        $genre->save();

        // dans Genre on des livres 
        // $genre->books; // pour afficher tous les livres associés à un genre
    }
}
