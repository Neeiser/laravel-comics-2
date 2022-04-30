@extends('template.base')

@section('title', 'DC Comics')

@section('content')
    <main>
        <div class="blue-banner">
            <div class="comic-thumb">
                <span>COMIC BOOK</span>
                <img src="{{ $thumb }}" alt="">
                <a href="">VIEW GALLERY</a>
            </div>
        </div>
        <div class="margin-100 comic-desc">
            <h2>{{ $title }}</h2>

            ok
        </div>
    </main>
@endsection