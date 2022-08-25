@extends('layout.app')

@section('main')
    <section class="single-component">
        <div class="small-container">
            <div class="top">
                <div class="top-left">
                    <a href="">
                        <img src="{{ $this_comic['thumb'] }}" alt="{{ $this_comic['title'] }}">
                    </a>
        
                    <h1>
                        {{ $this_comic['title'] }}
                    </h1>
    
                    <div class="banner">
                        <div class="left">
                            <span>
                                U.S. Price 
                                <span class="white">
                                    {{ $this_comic['price'] }}
                                </span>
                            </span>
                            <span>
                                AVAILABLE
                            </span>
                        </div>
    
                        <div class="right">
                            <span class="white">
                                Check Availability
                            </span>
                        </div>
                    </div>
        
                    <p class="text">
                        {{ $this_comic['description'] }}
                    </p>
                </div>
    
                <div class="top-right">
                    <span>
                        Advertisment
                    </span>
                    <img src="{{asset('images/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>

        <div class="bottom">
            <div class="small-container flex">
                <div class="bottom-left">
                    <h3 class="blue">
                        Talent
                    </h3>

                    <div class="space-between">
                        <span class="blue">
                            Art by:
                        </span>
                        <span class="secondary">
                            @foreach ($this_comic['artists'] as $artist)
                                {{ $artist }}{{ $loop->last ? '' : ', ' }}
                            @endforeach
                        </span>
                    </div>

                    <div class="space-between">
                        <span class="blue">
                            Written by:
                        </span>
                        <span class="secondary">
                            @foreach ($this_comic['writers'] as $writer)
                                {{ $writer }}{{ $loop->last ? '' : ', ' }}
                            @endforeach
                        </span>
                    </div>
                </div>

                <div class="bottom-right">
                    <h3 class="blue">
                        Specs
                    </h3>

                    <div class="row">
                        <div class="blue">
                            Series: <span class="secondary">{{ $this_comic['series'] }}</span>
                        </div>
                        <div class="blue">
                            U.S. Price: {{ $this_comic['price'] }}
                        </div>
                        <div class="blue">
                            On Sale Date: {{ $this_comic['sale_date'] }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="links">
               <div class="small-container">
                    <ul>
                        <li>
                            <div>
                                DIGITAL COMICS
                            </div>
                            <img src="{{asset('images/buy-comics-digital-comics.png') }}" alt="dc">
                        </li>
                        <li>
                            <div>
                                SHOP DC
                            </div>
                            <img src="{{asset('images/buy-comics-subscriptions.png') }}" alt="sub">
                        </li>
                        <li>
                            <div>
                                COMIC SHOP LOCATOR
                            </div>
                            <img src="{{asset('images/buy-comics-shop-locator.png') }}" alt="shop">
                        </li>
                        <li>
                            <div>
                                SUBSCRIPTIONS
                            </div>
                            <img src="{{asset('images/buy-comics-merchandise.png') }}" alt="merch">
                        </li>
                    </ul>
               </div>
            </div>
        </div>
    </section>
@endsection