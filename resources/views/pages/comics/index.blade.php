@extends('layouts.app')
@section('titolo-pagina', 'DC Comics - Comics')
@section('main-content')

    <div class="container">
        <div class="row g-3">
            @foreach ($comics as $id => $elem)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ $elem['thumb'] }}" class="card-img-top" alt="{{ $elem['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">{{ $elem['title'] }}</h5>
                            <a href="{{ route('show.comics', ['id' => $id]) }}" class="btn btn-primary">Apri Fumetto</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
