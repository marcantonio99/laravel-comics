@extends('layouts.app')
@section('titolo-pagina', 'DC Comics - show comic')
@section('main-content')

    <div class="container">
        <div class="card">
            <img src="{{ $singolo_elemento['thumb'] }}" class="card-img-top" alt="{{ $singolo_elemento['title'] }}">
            <div class="card-body">
                <h5 class="card-title text-uppercase">{{ $singolo_elemento['title'] }}</h5>
                <p>{{ $singolo_elemento['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
