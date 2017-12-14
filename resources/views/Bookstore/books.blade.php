@extends('Index')
@section('content')

    <h3>Ksiazki</h3>
    <table class="blueTable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tytul</th>
            <th>Opis</th>
            <th>Cena</th>
            <th>Ilosc</th>
        </tr>
        </thead>
        @foreach ($book as $object)
        <tbody>
        <tr>

            <td>{{ $object->id }}</td>
            <td>{{ $object->Tytul }}</td>
            <td>{{ $object->Opis }}</td>
            <td>{{ $object->Cena }} zl</td>
            <td>{{ $object->Ilosc }} sztuk</td>

        </tr>
        </tbody>
        @endforeach
    </table>

@stop


