@extends('layouts.master')

@section('content')
<div class="author">
  <h1>{{ $author->name }}</h1>
  <p>address : {{ $author->address }}</p>
  
</ul>
</div>
@endsection

@section('sidebar')
@parent
<nav>Menu secondaire</nav>
@endsection