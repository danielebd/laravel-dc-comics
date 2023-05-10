@extends('layout.app')

@section('page.title')
    {{ $comic->series }}
@endsection

@section('page.main')
    <div class="my-container d-flex my-5">
        <div class="img mx-3">
            <img class="rounded float-start" src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="width: 100%">
        </div>
        <div>
            <h5>
                Serie: {{ $comic->title }}
                
            </h5>
            <h5>
                Prezzo: ${{ $comic->price }}
            </h5>
            <div>
                <h5>
                    Descrizione:
                </h5>
                {{ $comic->description }}
            </div>
            <a href="{{ route('comics.index')}}" class="btn btn-primary btn-sm mt-2">Torna alla Home</a>
        </div>


    </div>
@endsection
