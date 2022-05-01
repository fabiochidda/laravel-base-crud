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
            <th>Visualizza</th>
            <th>Modifica</th>
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
                    <td>
                        <a href="{{route('comics.show',$el)}}">Visualizza</a>
                    </td>
                    <td>
                        <a href="{{route('comics.edit',$el)}}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{route('comics.destroy',$el)}}" method="POST">
                            @csrf

                            @method('DELETE')

                            <button type="submit">ELIMINA</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection