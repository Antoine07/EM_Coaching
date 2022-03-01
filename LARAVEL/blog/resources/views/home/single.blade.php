@extends('layouts.master')

@section('content')
<div class="book">
    <h1>{{$book->title}}</h1>
    <p>{{ $book->description }}</p>
    {{-- Trouvez comment formater la date --}}
    {{-- Notez que vous avez traiter le format de la date dans le Model Book --}}
    <p>Created : {{ $book->published_at }}</p>
    {{-- Affichez les auteurs qui ont écrit le livre  --}}
    <ul>
    {{-- Vous pouvez soit écrire $book->authors()->get() soit écrire $book->authors pour récupérer les auteurs dans un itérable --}}
    @forelse ($book->authors as $author)
    {{-- Rendre cliquable les auteurs  --}}
    <li>{{ $author->name }}</li>
    @empty
    <li>No author</li>
    @endforelse
</ul>
</div>
@endsection

@section('sidebar')
@parent
<nav>Menu secondaire</nav>
@endsection