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

    <section class="merch">
       <div class="container">
            <ul>
                <li>
                    <img src="{{asset('images/buy-comics-digital-comics.png') }}" alt="dc">
                    <div>
                        DIGITAL COMICS
                    </div>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-merchandise.png') }}" alt="merch">
                    <div>
                        DC MERCHANDISE
                    </div>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-subscriptions.png') }}" alt="sub">
                    <div>
                        SUBSCRIPTION
                    </div>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-shop-locator.png') }}" alt="shop">
                    <div>
                        COMIC SHOP LOCATOR
                    </div>
                </li>
                <li>
                    <img src="{{asset('images/buy-dc-power-visa.svg') }}" alt="visa">
                    <div>
                        DC POWER VISA
                    </div>
                </li>
            </ul>
       </div>
    </section>
@endsection