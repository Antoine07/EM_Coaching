<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {   //select * from books
        // return Book::all();

        // la méthode view permet d'injecter des données à la vue
        return view("home.index", ['books' => Book::all()]);
    }
}
