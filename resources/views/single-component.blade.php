@extends('layout.app')

@section('main')
    <div class="small-container">
        <img src="{{ $this_comic['thumb'] }}" alt="{{ $this_comic['title'] }}">
    </div>
@endsection