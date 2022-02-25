<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenreSeeder::class, // créer les genres avant les books logique !!!
            BookSeeder::class,
            AuthorSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}