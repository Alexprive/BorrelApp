@extends('layouts.app')

@section('content')
    <h1>Drinkers</h1>
    @if (count($drinks) > 0)
        <ul class="list-group">
            @foreach ($drinks as $drink)
                <!--<div class="row top"> </div>
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/img/monkey.jpg">
                        <div class="col-md-10 col-sm-10"></div>

                    </div>-->


                        <div class="card padding15">
                            <h3><a href="/drinks/{{$drink->id}}">{{$drink->name}}</a></h3>
                            <small>Aangemeld {{$drink->created_at}}</small>
                        </div>



            @endforeach
            {{ $drinks->links() }}

        </ul>
    @else
        <p>Geen drinkers gevonden!</p>
    @endif
@endsection