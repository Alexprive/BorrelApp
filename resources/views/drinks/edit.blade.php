@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['DrinksController@update', $drink->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Naam')}}
        {{Form::text('name', $drink->name, ['class' => 'form-control', 'placeholder' => 'Naam'])}}
    </div>
    <div class="form-group">
        {{Form::label('comment', 'Bijzonderheden')}}
        {{Form::textarea('comment', $drink->comment, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Bijzonderheden'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Wijzigen', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}


@endsection