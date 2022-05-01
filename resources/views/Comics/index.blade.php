@extends('layouts.home')

@section('mainContent')
    
    <table>

        <thead>
            <th>Titolo</th>
            <th>Immagine</th>
            <th>Descrizione</th>
            <th>Serie</th>
            <th>Sale Date</th>
            <th>Tipo</th>
            <th>Prezzo</th>
        </thead>

        <tbody>
            @foreach ($comics as $el)
                <tr>
                    <td>
                        {{$el->title}}
                    </td>
                    <td>
                        <figure>
                            <img src="{{$el->thumb}}" alt="">
                        </figure>
                    </td>
                    <td>
                        {{$el->description}}
                    </td>
                    <td>
                        {{$el->series}}
                    </td>
                    <td>
                        {{$el->sale_date}}
                    </td>
                    <td>
                        {{$el->type}}
                    </td>
                    <td>
                        {{$el->price}}
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection