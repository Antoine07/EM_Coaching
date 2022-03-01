@extends('layouts.master')

@section('content')
<div class="book">
    <h1>{{$book->title}}</h1>
    <p>{{ $book->description }}</p>
    {{-- Trouvez comment formater la date --}}
    <p>Created : {{ $book->published_at }}</p>
    {{-- Affichez les auteurs qui ont écrit le livre  --}}
</div>
@endsection

@section('sidebar')
@parent
<nav>Menu secondaire</nav>
@endsection