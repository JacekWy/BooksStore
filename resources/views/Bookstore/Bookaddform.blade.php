@extends ('Index')
@section ('content')
    <h1>Dodawanie Ksiazki</h1>

    {!! Form::open(['url'=>'Bookstore/Books','class'=>'form-horizontal','action'=>['BookStoreController@Bookinsert']]) !!}

    <div class="form-group">
        <div class="col-md-4 control-label">

            {!!Form::label('Tytul','Tytul:')!!}
        </div>
        <div class="col-md-6">
            {!!Form::text('Tytul',null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 control-label">

            {!!Form::label('Opis','Opis:')!!}
        </div>

        <div class="col-md-6">
            {!!Form::textarea('Opis',null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 control-label">

            {!!Form::label('Cena','Cena:')!!}
        </div>

        <div class="col-md-6">
            {!!Form::number('Cena',null,['class'=>'form-control'])!!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4 control-label">

            {!!Form::label('Ilosc',' Ilosc:')!!}
        </div>

        <div class="col-md-6">
            {!!Form::number('Ilosc',null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group">

        <div class="col-md-6 col-md-offset-4">
            {!!Form::submit('Dodaj Ksiazke',['class'=>'btn btn-primary'])!!}
        </div>
    </div>


    {!! Form::close() !!}
@stop