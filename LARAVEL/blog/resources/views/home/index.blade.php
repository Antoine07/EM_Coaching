@extends('layouts.master')

@section('content')
@foreach ($books as $book)
{{-- Rendre cliquable le titre suivant $book->id --}}
<p>This is book <a href="{{route('book', $book)}}">{{ $book->title }}</a></p>
{{-- ICI affichez les noms auteurs des livres, vérifiez qu'ils existent avant --}}
{{-- Faire un foreach Laravel pour afficher --}}
@if( $book->authors()->count() > 0 )
<p>Nombre d'auteur(s) : {{ $book->authors()->count() }}</p>
@endif
{{-- Affichez les auteurs du livre (nom) --}}
<ul>
    {{-- Vous pouvez soit écrire $book->authors()->get() soit écrire $book->authors pour récupérer les auteurs dans un itérable --}}
    @forelse ($book->authors as $author)
    <li><a href="{{route('author', $author) }}">{{ $author->name }}</a></li>
    @empty
    <li>No author</li>
    @endforelse
</ul>
@endforeach
@endsection

@section('sidebar')
@parent
<nav>Menu secondaire</nav>
@endsection