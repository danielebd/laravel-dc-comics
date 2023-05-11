@extends('layout.app')

@section('page.title')
    Elenco comic
@endsection

@section('page.main')
    <a href="{{ route('comics.create') }}" class="btn btn-success m-2">Inserisci Comic</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>${{ $comic->price }}</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Dettagli</a></td>
                    <td><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Modifica</a></td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Cancella">
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
