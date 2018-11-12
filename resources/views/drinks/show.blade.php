@extends('layouts.app')

@section('content')
    <h1>{{ $drink->name }}</h1>
    <hr>
    <br><br>
    <div class="card padding15">
        {!!   $drink->comment !!}
    </div>
    <small>Aangemeld {{ $drink->created_at }}</small>
    <hr>
    <a href="/drinks" class="btn btn-success">Terug</a>
    @if(!Auth::guest())
        <a href="/drinks/{{$drink->id}}/edit" class="btn btn-primary">Bewerken</a>
        {!! Form::open(['action' => ['DrinksController@destroy', $drink->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection