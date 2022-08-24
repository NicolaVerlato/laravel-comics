@extends('layout.app')

@section('main')
    <section class="jumbotron">
        <img src="{{asset('images/jumbotron.jpg') }}" alt="jumbotron image">
    </section>

    <section class="comics">
        <div class="container">
            @foreach ($comics as $item)
                <div class="item">
                    <a href="#">
                        <div class="image">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                        </div>
                        <div class="text">{{ $item['title'] }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection