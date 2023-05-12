@extends('layout.app')

@section('page.title')
    Modifica Comic: {{$comic->title}}
@endsection

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm my-3">Torna alla Home</a>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="img" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo in $</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option {{ empty($comic->type) ? 'selected' : null}}>Scegli il tipo</option>
                    <option value="graphic novel" value="{{ $comic->type === 'graphic novel' ? 'selected' : null }}">Graphic novel</option>
                    <option value="comic book" value="{{ $comic->type === 'comic book' ? 'selected' : null }}">Comic book</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">Artista</label>
                <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}">
            </div>
            <div class="mb-3">
                <label for="writers" class="form-label">Sceneggiatore</label>
                <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}">
            </div>
            <button type="submit" class="btn btn-primary mb-4">Inserisci</button>
        </form>
    </div>
@endsection
