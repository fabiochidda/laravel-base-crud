@extends('layouts.home')

@section('mainContent')
    
    <h1>Aggiungi un fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">

        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" placeholder="Inserisci il titolo">
        </div>

        <div>
            <label for="thumb">Immagine</label>
            <input type="text" name="thumb" placeholder="Inserisci l'url dell'immagine">
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione"></textarea>
        </div>

        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" placeholder="Inserisci la serie">
        </div>

        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" placeholder="Inserisci la sale date">
        </div>

        <div>
            <label for="type">Tipo</label>
            <input type="text" name="type" placeholder="inserisci il tipo di fumetto">
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" name="price" placeholder="Inserisci il prezzo">
        </div>

        <input type="submit" value="Aggiungi">

    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection