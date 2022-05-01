@extends('layouts.home')

@section('mainContent')

    <div class="comic">
        <h1>{{$comic->title}}</h1>
        <figure>
            <img src="{{$comic->thumb}}" alt="">
        </figure>
        <p>Descrizione: {{$comic->description}}</p>

        <div class="info">
            <p>Serie: {{$comic->series}}</p>
            <p>Sale Date: {{$comic->sale_date}}</p>
            <p>Tipo: {{$comic->type}}</p>
            <p>Prezzo: {{$comic->price}}&euro;</p>
        </div>
    </div>

@endsection