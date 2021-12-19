@extends('layouts.app')

@section('title', 'Афиша')

@section('content')
    <div class="row">
        @forelse ($posters as $p)
            <div class="col-3">
                <div class="card poster">
                    @if ($p['premiere'])
                        <span class="badge bg-danger poster__premiere">Премьера</span>
                    @endif
                    <img src="{{ $p['preview'] }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="#" class="card-text">{{ $p['title'] }}</a>
                        <div>
                            @foreach ($p['genres'] as $genre)
                                <span class="badge bg-light text-dark">{{ $genre }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>Пока ничего нет!</p>
        @endforelse
    </div>
@endsection
