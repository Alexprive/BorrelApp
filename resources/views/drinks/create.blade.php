@extends('layouts.app')

@section('content')
    <h1>Aanmelden</h1>
    {!! Form::open(['action' => 'DrinksController@store', 'method' => 'POST']) !!}

        <div class="form-group">
            {{Form::label('name', 'Naam')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Naam'])}}
        </div>

        <div class="form-group">
            {{Form::label('comment', 'Bijzonderheden')}}
            {{Form::textarea('comment', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Bijzonderheden'])}}
        </div>

        {{Form::submit('Aanmelden', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection