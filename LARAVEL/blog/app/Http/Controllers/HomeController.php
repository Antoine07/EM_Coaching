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

    // 1 METHODE)  affichez le détail d'un livre
    // public function showBook(int $id){
    //     return Book::find($id);
    // }
    
    // 2 METHOD) BINDING de MODEL instance de book est faite par Laravel directement, il est capable de récupérer l'id dans la route et de faire l'instance du de la classe Booo
    public function showBook(Book $book){
        return $book;
    }
}
