@extends('layouts.master')

@section('content')
@foreach ($books as $book)
{{-- Rendre cliquable le titre suivant $book->id --}}
<p>This is book {{ $book->title }}</p>
{{-- ICI affichez les noms auteurs des livres, vérifiez qu'ils existent avant --}}
{{-- Faire un foreach Laravel pour afficher --}}
@if( $book->authors()->count() > 0 )
<p>Nombre d'auteur(s) : {{ $book->authors()->count() }}</p>
@endif
{{-- Affichez les auteurs du livre (nom) --}}
<ul>
    {{-- Vous pouvez soit écrire $book->authors()->get() soit écrire $book->authors pour récupérer les auteurs dans un itérable --}}
    @forelse ($book->authors as $author)
    <li>{{ $author->name }}</li>
    <p>----------------------</p>
    @empty
    <li>No author</li>
    @endforelse
</ul>
@endforeach
@endsection