@extends('layouts.home')

@section('mainContent')
    
    <h1>Modifica il fumetto</h1>

    <form action="{{route('comics.update',$comic->id)}}" method="POST">

        @csrf

        @method('PUT')

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" value="{{$comic->title}}" placeholder="Inserisci il titolo">
        </div>

        <div>
            <label for="thumb">Immagine</label>
            <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Inserisci l'url dell'immagine">
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione">{{$comic->description}}"</textarea>
        </div>

        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" value="{{$comic->series}}" placeholder="Inserisci la serie">
        </div>

        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" value="{{$comic->sale_date}}" placeholder="Inserisci la sale date">
        </div>

        <div>
            <label for="type">Tipo</label>
            <input type="text" name="type" value="{{$comic->type}}" placeholder="inserisci il tipo di fumetto">
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" name="price" value="{{$comic->price}}" placeholder="Inserisci il prezzo">
        </div>

        <input type="submit" value="Modifica">

    </form>

@endsection