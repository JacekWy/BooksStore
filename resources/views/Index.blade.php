<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BookStore</title>
    <link href="{{URL::asset('css/Bookstore.css') }}" rel="stylesheet">
</head>
<body>
<h1>Book Store</h1>
<nav >
        <a href="{{url('/Bookstore/contact')}}">Kontakt</a>
        <a href="{{url('/Bookstore/about')}}">About</a>
</nav>



@yield('content')
@foreach ($book as $object)
    {{ $object->id }}
    {{ $object->Tytul }}
    {{ $object->Opis }}
    {{ $object->Cena }}
    {{ $object->Ilosc }}
@endforeach

</body>
</html>