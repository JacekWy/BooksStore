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
        <a href="{{url('/Bookstore/Books')}}">Ksiazki</a>
        <a href="{{url('/Bookstore/Bookadd')}}">Dodaj Ksiazke</a>
        <a href="{{url('/Bookstore/contact')}}">Kontakt</a>
        <a href="{{url('/Bookstore/about')}}">About</a>
</nav>

<article>
    @yield('content')

</article>




<footer>
    Najlepsze ksiazki

</footer>


</body>
</html>