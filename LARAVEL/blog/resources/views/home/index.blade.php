<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($books as $book)
    <p>This is book {{ $book->title }}</p>
    {{-- ICI affichez les auteurs des livres, vérifiez qu'ils existent avant --}}
    {{-- Faire un foreach Laravel pour afficher --}}
    {{ dump($book->authors()->count() )}}
@endforeach
</body>
</html>