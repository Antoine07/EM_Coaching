<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()->count(10)->create();

        $author = new Author();
        $author->name = "Tarek";
        $author->email = "tarek@tarek.com";

        $author->save();

        $author = new Author();
        $author->name = "Michel";
        $author->email = "michel@michel.com";

        $author->save();

        $author = new Author();
        $author->name = "Kevin";
        $author->email = "kevin@kevin.com";

        $author->save();

        $author = new Author();
        $author->name = "Philippe";
        $author->email = "philippe@philippe.com";

        $author->save();
    }
}
