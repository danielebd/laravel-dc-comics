@extends('layout.app')

@section('page.title')
    Elenco comic
@endsection

@section('page.main')
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
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>${{$comic->price}}</td>
                    <td><a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary btn-sm">Dettagli</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
